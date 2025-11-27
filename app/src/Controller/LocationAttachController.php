<?php

namespace App\Controller;

use App\Entity\WikiPage;
use App\Service\LocationTagService;
use App\Service\NotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationAttachController extends AbstractController
{
    #[Route('/wiki/{id}/location/attach/{externalId}', name: 'app_wiki_location_attach', methods: ['POST'])]
    public function attach(
        WikiPage $wikiPage,
        string $externalId,
        Request $request,
        LocationTagService $locationTagService,
        EntityManagerInterface $em,
        NotificationService $notificationService
    ): Response {
        $currentUser = $this->getUser();
        if (!$currentUser || !$wikiPage->getOwner() || $wikiPage->getOwner() !== $currentUser) {
            $this->addFlash('error', 'Vous ne pouvez pas modifier la localisation de ce wiki.');
            return $this->redirectToRoute('app_wiki_show', ['id' => $wikiPage->getId()]);
        }

        if (!$this->isCsrfTokenValid('attach_location'.$wikiPage->getId().$externalId, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_wiki_show', ['id' => $wikiPage->getId()]);
        }

        $record = $locationTagService->findRecordByExternalId($externalId);
        if (!$record) {
            $this->addFlash('error', 'Localisation introuvable.');
            return $this->redirectToRoute('app_wiki_show', ['id' => $wikiPage->getId()]);
        }

        $tags = $locationTagService->attachLocationTagsToWiki($wikiPage, $record);
        $em->flush();

        // Notification dans le forum si il existe
        $forum = $wikiPage->getForum();
        if ($forum && !empty($tags)) {
            // Prendre le tag le plus spécifique (le dernier dans la hiérarchie)
            $lastTag = end($tags);
            $tagName = $lastTag->getName();
            if ($lastTag->getParent()) {
                $tagName = $lastTag->getParent()->getName() . ' > ' . $tagName;
            }
            $notificationService->notifyTagCreated($forum, $tagName, $currentUser);
        }

        $this->addFlash('success', 'Localisation associée au wiki.');

        return $this->redirectToRoute('app_wiki_show', ['id' => $wikiPage->getId()]);
    }
}


