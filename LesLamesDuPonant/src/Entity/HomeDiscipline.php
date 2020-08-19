<?php

namespace App\Entity;

use App\Repository\HomeDisciplineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeDisciplineRepository::class)
 */
class HomeDiscipline
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nameDiscipline;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageHomeDiscipline;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $descriptionDiscipline;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameDiscipline(): ?string
    {
        return $this->nameDiscipline;
    }

    public function setNameDiscipline(string $nameDiscipline): self
    {
        $this->nameDiscipline = $nameDiscipline;

        return $this;
    }

    public function getImageHomeDiscipline(): ?string
    {
        return $this->imageHomeDiscipline;
    }

    public function setImageHomeDiscipline(?string $imageHomeDiscipline): self
    {
        $this->imageHomeDiscipline = $imageHomeDiscipline;

        return $this;
    }

    public function getDescriptionDiscipline(): ?string
    {
        return $this->descriptionDiscipline;
    }

    public function setDescriptionDiscipline(?string $descriptionDiscipline): self
    {
        $this->descriptionDiscipline = $descriptionDiscipline;

        return $this;
    }
}
