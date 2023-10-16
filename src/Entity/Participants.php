<?php

namespace App\Entity;

use App\Repository\ParticipantsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipantsRepository::class)]
class Participants
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\ManyToMany(targetEntity: Concours::class, inversedBy: 'participants')]
    private Collection $Concours;

    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'participants')]
    private Collection $categorie;

    #[ORM\Column(length: 255)]
    private ?string $club = null;

    #[ORM\Column(length: 255)]
    private ?string $équidé = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $groupe = null;

    public function __construct()
    {
        $this->Concours = new ArrayCollection();
        $this->categorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection<int, Concours>
     */
    public function getConcours(): Collection
    {
        return $this->Concours;
    }

    public function addConcour(Concours $concour): self
    {
        if (!$this->Concours->contains($concour)) {
            $this->Concours->add($concour);
        }

        return $this;
    }

    public function removeConcour(Concours $concour): self
    {
        $this->Concours->removeElement($concour);

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function addCategorie(Categorie $categorie): self
    {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie->add($categorie);
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): self
    {
        $this->categorie->removeElement($categorie);

        return $this;
    }

    public function getClub(): ?string
    {
        return $this->club;
    }

    public function setClub(string $club): self
    {
        $this->club = $club;

        return $this;
    }

    public function getéquidé(): ?string
    {
        return $this->équidé;
    }

    public function setéquidé(string $équidé): self
    {
        $this->équidé = $équidé;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(?string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }
    public function __toString()
    {
        return $this->getNom();
    }

}
