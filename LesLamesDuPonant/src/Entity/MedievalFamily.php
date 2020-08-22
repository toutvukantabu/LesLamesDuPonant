<?php

namespace App\Entity;

use App\Repository\MedievalFamilyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedievalFamilyRepository::class)
 */
class MedievalFamily
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titleMedievalFamily;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionMedievalFamily;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleMedievalFamily(): ?string
    {
        return $this->titleMedievalFamily;
    }

    public function setTitleMedievalFamily(?string $titleMedievalFamily): self
    {
        $this->titleMedievalFamily = $titleMedievalFamily;

        return $this;
    }

    public function getDescriptionMedievalFamily(): ?string
    {
        return $this->descriptionMedievalFamily;
    }

    public function setDescriptionMedievalFamily(?string $descriptionMedievalFamily): self
    {
        $this->descriptionMedievalFamily = $descriptionMedievalFamily;

        return $this;
    }
}
