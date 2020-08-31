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

    /**
     * @ORM\OneToOne(targetEntity=Discipline::class, mappedBy="relationHomeDiscipline", cascade={"persist", "remove"})
     */
    private $relationDiscipline;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

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

    public function getRelationDiscipline(): ?Discipline
    {
        return $this->relationDiscipline;
    }

    public function setRelationDiscipline(?Discipline $relationDiscipline): self
    {
        $this->relationDiscipline = $relationDiscipline;

        // set (or unset) the owning side of the relation if necessary
        $newRelationHomeDiscipline = null === $relationDiscipline ? null : $this;
        if ($relationDiscipline->getRelationHomeDiscipline() !== $newRelationHomeDiscipline) {
            $relationDiscipline->setRelationHomeDiscipline($newRelationHomeDiscipline);
        }

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
