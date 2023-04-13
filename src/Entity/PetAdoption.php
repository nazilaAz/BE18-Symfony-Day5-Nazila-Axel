<?php

namespace App\Entity;

use App\Repository\PetAdoptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PetAdoptionRepository::class)]
class PetAdoption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $adoption_date = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Animal $fk_animal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdoptionDate(): ?\DateTimeInterface
    {
        return $this->adoption_date;
    }

    public function setAdoptionDate(\DateTimeInterface $adoption_date): self
    {
        $this->adoption_date = $adoption_date;

        return $this;
    }

    public function getFkAnimal(): ?Animal
    {
        return $this->fk_animal;
    }

    public function setFkAnimal(?Animal $fk_animal): self
    {
        $this->fk_animal = $fk_animal;

        return $this;
    }
}
