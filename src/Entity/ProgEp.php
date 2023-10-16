<?php

namespace App\Entity;

use App\Repository\ProgEpRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgEpRepository::class)]
class ProgEp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Epreuves $ep = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Concours $concours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEp(): ?Epreuves
    {
        return $this->ep;
    }

    public function setEp(?Epreuves $ep): self
    {
        $this->ep = $ep;

        return $this;
    }

    public function getConcours(): ?Concours
    {
        return $this->concours;
    }

    public function setConcours(?Concours $concours): self
    {
        $this->concours = $concours;

        return $this;
    }
}
