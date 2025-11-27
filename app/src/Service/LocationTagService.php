<?php

namespace App\Service;

use App\Entity\LocationTag;
use App\Entity\WikiPage;
use App\Repository\LocationTagRepository;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
use Symfony\Component\HttpKernel\KernelInterface;

class LocationTagService
{
    public function __construct(
        private readonly LocationTagRepository $locationTagRepository,
        private readonly EntityManagerInterface $em,
        private readonly KernelInterface $kernel,
    ) {
    }

    private function getCsvPath(): string
    {
        // Nouveau CSV: app/datapi/adresses-with-ids-68.csv
        return $this->kernel->getProjectDir().'/datapi/adresses-with-ids-68.csv';
    }

    /**
     * Recherche des adresses correspondant à une chaîne,
     * et renvoie quelques propositions (numéro + voie + commune).
     * 
     * Recherche multi-mots : divise la requête en mots-clés et recherche dans
     * plusieurs champs (numero, nom_voie, nom_commune, code_postal).
     * Trie les résultats par nombre de correspondances décroissant.
     *
     * @return array<int, array<string, string|int>>
     */
    public function searchPlaces(string $query, int $limit = 10): array
    {
        $query = trim($query);
        if ($query === '') {
            return [];
        }

        // Limiter la limite à un maximum raisonnable pour éviter les crashs
        $limit = min($limit, 50);

        // Diviser la requête en mots-clés (supprimer les espaces multiples)
        // Conversion en minuscules pour éviter les problèmes de casse
        $keywords = array_filter(
            preg_split('/\s+/', mb_strtolower($query)),
            fn($word) => $word !== ''
        );
        
        if (empty($keywords)) {
            return [];
        }

        $csv = Reader::createFromPath($this->getCsvPath(), 'r');
        $csv->setDelimiter(';');
        $csv->setHeaderOffset(0);

        $results = [];
        $maxResults = $limit * 3; // Collecter 3x plus de résultats pour avoir de quoi trier

        foreach ($csv->getRecords() as $record) {
            /** @var array<string,string> $record */
            // Conversion en minuscules pour éviter les problèmes de casse
            $numero   = mb_strtolower(trim($record['numero'] ?? ''));
            $voie     = mb_strtolower(trim($record['nom_voie'] ?? ''));
            $commune  = mb_strtolower(trim($record['nom_commune'] ?? ''));
            $cp       = mb_strtolower(trim($record['code_postal'] ?? ''));

            // Pour chaque mot-clé, vérifier dans quel(s) champ(s) il correspond
            $matchedKeywords = [];
            $matchedFields = [
                'numero' => false,
                'voie' => false,
                'commune' => false,
                'code_postal' => false,
            ];
            
            foreach ($keywords as $keyword) {
                $keyword = trim($keyword);
                if ($keyword === '') {
                    continue;
                }
                
                // Vérifier si le mot-clé correspond dans chaque champ (tous en minuscules)
                $foundInFields = [];
                if ($numero !== '' && str_contains($numero, $keyword)) {
                    $matchedFields['numero'] = true;
                    $foundInFields[] = 'numero';
                }
                if ($voie !== '' && str_contains($voie, $keyword)) {
                    $matchedFields['voie'] = true;
                    $foundInFields[] = 'voie';
                }
                if ($commune !== '' && str_contains($commune, $keyword)) {
                    $matchedFields['commune'] = true;
                    $foundInFields[] = 'commune';
                }
                if ($cp !== '' && str_contains($cp, $keyword)) {
                    $matchedFields['code_postal'] = true;
                    $foundInFields[] = 'code_postal';
                }
                
                // Si le mot-clé a été trouvé, l'enregistrer
                if (!empty($foundInFields)) {
                    $matchedKeywords[] = [
                        'keyword' => $keyword,
                        'fields' => $foundInFields,
                    ];
                }
            }

            // Ne garder que les résultats où TOUS les mots-clés sont trouvés
            $totalKeywords = count($keywords);
            $foundKeywords = count($matchedKeywords);
            
            if ($foundKeywords === $totalKeywords && $foundKeywords > 0) {
                // Compter le nombre de champs différents qui correspondent
                $fieldCount = 0;
                if ($matchedFields['numero']) $fieldCount++;
                if ($matchedFields['voie']) $fieldCount++;
                if ($matchedFields['commune']) $fieldCount++;
                if ($matchedFields['code_postal']) $fieldCount++;
                
                // Score = (nombre de champs * 100) + nombre de mots-clés
                // Cela privilégie fortement les résultats qui correspondent à plusieurs champs
                // Exemple : 3 champs + 4 mots = 304 points vs 1 champ + 4 mots = 104 points
                $score = ($fieldCount * 100) + $foundKeywords;
                
                $results[] = [
                    'id' => $record['id'] ?? '',
                    'numero' => $record['numero'] ?? '',
                    'nom_voie' => $record['nom_voie'] ?? '',
                    'nom_commune' => $record['nom_commune'] ?? '',
                    'code_postal' => $record['code_postal'] ?? '',
                    'code_insee' => $record['code_insee'] ?? '',
                    '_score' => $score, // Score pour le tri
                ];
            }

            // Arrêter la recherche si on a collecté assez de résultats
            if (\count($results) >= $maxResults) {
                break;
            }
        }

        // Trier par score décroissant (plus de correspondances = meilleur résultat)
        usort($results, function ($a, $b) {
            return $b['_score'] <=> $a['_score'];
        });

        // Limiter les résultats finaux
        $results = array_slice($results, 0, $limit);

        // Retirer le score des résultats finaux (pas besoin de l'afficher)
        foreach ($results as &$result) {
            unset($result['_score']);
        }

        return $results;
    }

    /**
     * Retrouve un enregistrement CSV par son identifiant externe (colonne "id").
     *
     * @return array<string,string>|null
     */
    public function findRecordByExternalId(string $externalId): ?array
    {
        $csv = Reader::createFromPath($this->getCsvPath(), 'r');
        $csv->setDelimiter(';');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $record) {
            /** @var array<string,string> $record */
            if (($record['id'] ?? '') === $externalId) {
                return $record;
            }
        }

        return null;
    }

    /**
     * À partir d'une ligne CSV (id, nom_lieu_dit, nom_commune, ...),
     * crée (ou retrouve) les tags de localisation hiérarchiques
     * et les associe au wiki.
     *
     * Avec le CSV des adresses 68:
     * - Niveau 0 : France
     * - Niveau 1 : Grand Est
     * - Niveau 2 : commune
     * - Niveau 3 : voie
     * - Niveau 4 : numéro (si présent)
     *
     * @param array<string,string> $record
     * @return LocationTag[] tags créés / retrouvés
     */
    public function attachLocationTagsToWiki(WikiPage $wikiPage, array $record): array
    {
        $tags = [];

        $communeName = $record['nom_commune'] ?? null;
        $voieName    = $record['nom_voie'] ?? null;
        $numero      = $record['numero'] ?? null;
        $codePostal  = $record['code_postal'] ?? null;
        $codeInsee   = $record['code_insee'] ?? null;
        $externalId  = $record['id'] ?? null;
        $longitude   = !empty($record['lon']) ? (float) $record['lon'] : null;
        $latitude    = !empty($record['lat']) ? (float) $record['lat'] : null;

        // Niveau 0 : France
        $franceTag = $this->locationTagRepository->findOneBy([
            'name' => 'France',
            'type' => 'pays',
        ]);
        if (!$franceTag) {
            $franceTag = new LocationTag();
            $franceTag->setName('France')->setType('pays');
            $this->em->persist($franceTag);
            $this->em->flush(); // Flush pour obtenir l'ID
        }
        $wikiPage->addLocationTag($franceTag);
        $tags[] = $franceTag;

        // Niveau 1 : Grand Est (donnée implicite pour le 68)
        $regionTag = $this->locationTagRepository->findOneBy([
            'name' => 'Grand Est',
            'type' => 'region',
            'parent' => $franceTag,
        ]);
        if (!$regionTag) {
            $regionTag = new LocationTag();
            $regionTag->setName('Grand Est')
                ->setType('region')
                ->setParent($franceTag);
            $this->em->persist($regionTag);
            $this->em->flush(); // Flush pour obtenir l'ID
        }
        $wikiPage->addLocationTag($regionTag);
        $tags[] = $regionTag;

        // Niveau 2 : commune
        // Recherche d'abord par code_insee pour éviter les doublons
        if ($communeName) {
            $communeTag = null;
            if ($codeInsee) {
                $communeTag = $this->locationTagRepository->findOneBy([
                    'codeInsee' => $codeInsee,
                    'type' => 'commune',
                ]);
            }
            
            // Si pas trouvé par code_insee, chercher par nom + parent
            if (!$communeTag) {
                $communeTag = $this->locationTagRepository->findOneBy([
                    'name' => $communeName,
                    'type' => 'commune',
                    'parent' => $regionTag,
                ]);
            }

            if (!$communeTag) {
                $communeTag = new LocationTag();
                $communeTag->setName($communeName)
                    ->setType('commune')
                    ->setParent($regionTag)
                    ->setCodePostal($codePostal)
                    ->setCodeInsee($codeInsee)
                    ->setLongitude($longitude)
                    ->setLatitude($latitude);

                $this->em->persist($communeTag);
                $this->em->flush(); // Flush pour obtenir l'ID avant utilisation dans requête suivante
            } else {
                // Mettre à jour les coordonnées si elles sont manquantes
                if (!$communeTag->getLongitude() && $longitude) {
                    $communeTag->setLongitude($longitude);
                }
                if (!$communeTag->getLatitude() && $latitude) {
                    $communeTag->setLatitude($latitude);
                }
                // S'assurer que le parent est correct
                if (!$communeTag->getParent()) {
                    $communeTag->setParent($regionTag);
                }
            }

            $wikiPage->addLocationTag($communeTag);
            $tags[] = $communeTag;

                // Niveau 3 : voie
                // Recherche par nom + parent (commune) + code_insee pour éviter les doublons
                if ($voieName) {
                    $voieTag = null;
                    // Chercher d'abord par nom + parent + code_insee
                    // Utiliser l'ID du parent au lieu de l'entité pour éviter l'erreur
                    if ($codeInsee && $communeTag->getId()) {
                        $qb = $this->locationTagRepository->createQueryBuilder('t')
                            ->where('t.name = :name')
                            ->andWhere('t.type = :type')
                            ->andWhere('t.parent = :parentId')
                            ->andWhere('t.codeInsee = :codeInsee')
                            ->setParameter('name', $voieName)
                            ->setParameter('type', 'voie')
                            ->setParameter('parentId', $communeTag->getId())
                            ->setParameter('codeInsee', $codeInsee)
                            ->setMaxResults(1);
                        $voieTag = $qb->getQuery()->getOneOrNullResult();
                    }
                    
                    // Si pas trouvé, chercher par nom + parent uniquement
                    if (!$voieTag) {
                        $voieTag = $this->locationTagRepository->findOneBy([
                            'name' => $voieName,
                            'type' => 'voie',
                            'parent' => $communeTag,
                        ]);
                    }

                    if (!$voieTag) {
                        $voieTag = new LocationTag();
                        $voieTag->setName($voieName)
                            ->setType('voie')
                            ->setParent($communeTag)
                            ->setCodePostal($codePostal)
                            ->setCodeInsee($codeInsee)
                            ->setLongitude($longitude)
                            ->setLatitude($latitude);

                        $this->em->persist($voieTag);
                        $this->em->flush(); // Flush pour obtenir l'ID avant utilisation dans requête suivante
                    } else {
                    // Mettre à jour les coordonnées si elles sont manquantes
                    if (!$voieTag->getLongitude() && $longitude) {
                        $voieTag->setLongitude($longitude);
                    }
                    if (!$voieTag->getLatitude() && $latitude) {
                        $voieTag->setLatitude($latitude);
                    }
                    // S'assurer que le parent est correct
                    if ($voieTag->getParent() !== $communeTag) {
                        $voieTag->setParent($communeTag);
                    }
                }

                $wikiPage->addLocationTag($voieTag);
                $tags[] = $voieTag;

                // Niveau 4 : numéro
                // Recherche par externalId d'abord (unique), sinon par nom + parent
                if ($numero !== null && $numero !== '') {
                    $numeroTag = null;
                    if ($externalId) {
                        $numeroTag = $this->locationTagRepository->findOneBy([
                            'externalId' => $externalId,
                            'type' => 'numero',
                        ]);
                    }
                    
                    // Si pas trouvé par externalId, chercher par nom + parent
                    if (!$numeroTag) {
                        $numeroTag = $this->locationTagRepository->findOneBy([
                            'name' => $numero,
                            'type' => 'numero',
                            'parent' => $voieTag,
                        ]);
                    }

                    if (!$numeroTag) {
                        $numeroTag = new LocationTag();
                        $numeroTag->setName($numero)
                            ->setType('numero')
                            ->setParent($voieTag)
                            ->setCodePostal($codePostal)
                            ->setCodeInsee($codeInsee)
                            ->setExternalId($externalId)
                            ->setLongitude($longitude)
                            ->setLatitude($latitude);

                        $this->em->persist($numeroTag);
                        // Pas besoin de flush ici, on flush à la fin
                    } else {
                        // Mettre à jour les coordonnées si elles sont manquantes
                        if (!$numeroTag->getLongitude() && $longitude) {
                            $numeroTag->setLongitude($longitude);
                        }
                        if (!$numeroTag->getLatitude() && $latitude) {
                            $numeroTag->setLatitude($latitude);
                        }
                        // S'assurer que le parent est correct
                        if ($numeroTag->getParent() !== $voieTag) {
                            $numeroTag->setParent($voieTag);
                        }
                        // Mettre à jour externalId si manquant
                        if (!$numeroTag->getExternalId() && $externalId) {
                            $numeroTag->setExternalId($externalId);
                        }
                    }

                    $wikiPage->addLocationTag($numeroTag);
                    $tags[] = $numeroTag;
                }
            }
        }

        $this->em->flush();

        return $tags;
    }
}


