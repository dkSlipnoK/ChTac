<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ResultatRepository;

#[ORM\Entity(repositoryClass: ResultatRepository::class)]
class Resultat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?ProgEp $prog_ep = null;

    #[ORM\Column(nullable: true)]
    private array $raw_data = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgEp(): ?ProgEp
    {
        return $this->prog_ep;
    }

    public function setProgEp(?ProgEp $prog_ep): self
    {
        $this->prog_ep = $prog_ep;

        return $this;
    }

    public function getRawData(): array
    {
        return $this->raw_data;
    }

    public function setRawData(?array $raw_data): self
    {
        $this->raw_data = $raw_data;

        return $this;
    }
}
