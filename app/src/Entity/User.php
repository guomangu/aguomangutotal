<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: WikiPage::class)]
    private Collection $wikiPages;

    public function __construct()
    {
        $this->wikiPages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return Collection<int, WikiPage>
     */
    public function getWikiPages(): Collection
    {
        return $this->wikiPages;
    }

    public function addWikiPage(WikiPage $wikiPage): static
    {
        if (!$this->wikiPages->contains($wikiPage)) {
            $this->wikiPages->add($wikiPage);
            $wikiPage->setOwner($this);
        }

        return $this;
    }

    public function removeWikiPage(WikiPage $wikiPage): static
    {
        if ($this->wikiPages->removeElement($wikiPage)) {
            if ($wikiPage->getOwner() === $this) {
                $wikiPage->setOwner(null);
            }
        }

        return $this;
    }
}


