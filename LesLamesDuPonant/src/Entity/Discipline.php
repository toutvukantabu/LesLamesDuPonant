<?php

namespace App\Entity;

use App\Repository\DisciplineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DisciplineRepository::class)
 */
class Discipline
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageOneDiscipline;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageTwoDiscipline;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageThreeDiscipline;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $disciplinetitle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $disciplineDescription;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nameInstructor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoInstructor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageOneDiscipline(): ?string
    {
        return $this->imageOneDiscipline;
    }

    public function setImageOneDiscipline(?string $imageOneDiscipline): self
    {
        $this->imageOneDiscipline = $imageOneDiscipline;

        return $this;
    }

    public function getImageTwoDiscipline(): ?string
    {
        return $this->imageTwoDiscipline;
    }

    public function setImageTwoDiscipline(?string $imageTwoDiscipline): self
    {
        $this->imageTwoDiscipline = $imageTwoDiscipline;

        return $this;
    }

    public function getImageThreeDiscipline(): ?string
    {
        return $this->imageThreeDiscipline;
    }

    public function setImageThreeDiscipline(?string $imageThreeDiscipline): self
    {
        $this->imageThreeDiscipline = $imageThreeDiscipline;

        return $this;
    }

    public function getDisciplinetitle(): ?string
    {
        return $this->disciplinetitle;
    }

    public function setDisciplinetitle(?string $disciplinetitle): self
    {
        $this->disciplinetitle = $disciplinetitle;

        return $this;
    }

    public function getDisciplineDescription(): ?string
    {
        return $this->disciplineDescription;
    }

    public function setDisciplineDescription(?string $disciplineDescription): self
    {
        $this->disciplineDescription = $disciplineDescription;

        return $this;
    }

    public function getNameInstructor(): ?string
    {
        return $this->nameInstructor;
    }

    public function setNameInstructor(?string $nameInstructor): self
    {
        $this->nameInstructor = $nameInstructor;

        return $this;
    }

    public function getPhotoInstructor(): ?string
    {
        return $this->photoInstructor;
    }

    public function setPhotoInstructor(?string $photoInstructor): self
    {
        $this->photoInstructor = $photoInstructor;

        return $this;
    }
}
