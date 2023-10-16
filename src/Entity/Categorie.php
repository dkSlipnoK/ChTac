<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToMany(targetEntity: Concours::class, inversedBy: 'categories')]
    #[ORM\JoinTable(name:'categorie_concours')]
    private Collection $concours;

    #[ORM\ManyToMany(targetEntity: Epreuves::class, mappedBy: 'categorie')]
    private Collection $epreuves;

    #[ORM\ManyToMany(targetEntity: Participants::class, mappedBy: 'categorie')]
    private Collection $participants;

    public function __construct()
    {
        $this->concours = new ArrayCollection();
        $this->epreuves = new ArrayCollection();
        $this->participants = new ArrayCollection();
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

    /**
     * @return Collection<int, Concours>
     */
    public function getConcours(): Collection
    {
        return $this->concours;
    }

    public function addConcour(Concours $concour): self
    {
        if (!$this->concours->contains($concour)) {
            $this->concours->add($concour);
        }

        return $this;
    }

    public function removeConcour(Concours $concour): self
    {
        $this->concours->removeElement($concour);

        return $this;
    }

    /**
     * @return Collection<int, Epreuves>
     */
    public function getEpreuves(): Collection
    {
        return $this->epreuves;
    }

    public function addEpreuve(Epreuves $epreuve): self
    {
        if (!$this->epreuves->contains($epreuve)) {
            $this->epreuves->add($epreuve);
            $epreuve->addCategorie($this);
        }

        return $this;
    }

    public function removeEpreuve(Epreuves $epreuve): self
    {
        if ($this->epreuves->removeElement($epreuve)) {
            $epreuve->removeCategorie($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Participants>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(Participants $participant): self
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
            $participant->addCategorie($this);
        }

        return $this;
    }

    public function removeParticipant(Participants $participant): self
    {
        if ($this->participants->removeElement($participant)) {
            $participant->removeCategorie($this);
        }

        return $this;
    }
}
