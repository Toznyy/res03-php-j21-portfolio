<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $principalTech = null;

    #[ORM\Column(length: 255)]
    private ?string $secondTech = null;

    #[ORM\Column(length: 2047)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrincipalTech(): ?string
    {
        return $this->principalTech;
    }

    public function setPrincipalTech(string $principalTech): self
    {
        $this->principalTech = $principalTech;

        return $this;
    }

    public function getSecondTech(): ?string
    {
        return $this->secondTech;
    }

    public function setSecondTech(string $secondTech): self
    {
        $this->secondTech = $secondTech;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
