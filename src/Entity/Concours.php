<?php

namespace App\Entity;

use App\Repository\ConcoursRepository;
use Collator;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Json;

#[ORM\Entity(repositoryClass: ConcoursRepository::class)]
class Concours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateD = null;

    #[ORM\ManyToOne(inversedBy: 'concours')]
    private ?Users $orga = null;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[ORM\Column(length: 255)]
    private ?string $club = null;

   
    /**
     * @var Collection<Categorie>
     */
    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'concours')]
    #[ORM\JoinTable(name:"concours_categorie")]
    private $type = null;


    #[ORM\ManyToMany(targetEntity: Categorie::class, mappedBy: 'Concours')]
    private Collection $categories;

    #[ORM\ManyToMany(targetEntity: Participants::class, mappedBy: 'Concours')]
    private Collection $participants;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?string $content = null;

     
    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->participants = new ArrayCollection();
        $this->type = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->dateD;
    }

    public function setDateD(\DateTimeInterface $dateD): self
    {
        $this->dateD = $dateD;

        return $this;
    }

    public function getOrga(): ?Users
    {
        return $this->orga;
    }

    public function setOrga(?Users $orga): self
    {
        $this->orga = $orga;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

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

    /**
     * @return Collection<Categorie>
     */
    public function getType(): Collection
    {
        return $this->type;
    }
    public function setType(Collection $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->addConcour($this);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeConcour($this);
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
            $participant->addConcour($this);
        }

        return $this;
    }

    public function removeParticipant(Participants $participant): self
    {
        if ($this->participants->removeElement($participant)) {
            $participant->removeConcour($this);
        }

        return $this;
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

    public function getContent(string $content): ?string
    {
        return $this->content = json_decode($content);
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}
