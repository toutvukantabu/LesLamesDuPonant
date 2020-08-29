<?php

namespace App\Entity;

use App\Repository\LesLamesDuPonantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LesLamesDuPonantRepository::class)
 */
class LesLamesDuPonant
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
    private $titleLLDP;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $desciptionLLDP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureLesLamesDuponant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleLLDP(): ?string
    {
        return $this->titleLLDP;
    }

    public function setTitleLLDP(?string $titleLLDP): self
    {
        $this->titleLLDP = $titleLLDP;

        return $this;
    }

    public function getDesciptionLLDP(): ?string
    {
        return $this->desciptionLLDP;
    }

    public function setDesciptionLLDP(?string $desciptionLLDP): self
    {
        $this->desciptionLLDP = $desciptionLLDP;

        return $this;
    }

    public function getPictureLesLamesDuponant(): ?string
    {
        return $this->pictureLesLamesDuponant;
    }

    public function setPictureLesLamesDuponant(?string $pictureLesLamesDuponant): self
    {
        $this->pictureLesLamesDuponant = $pictureLesLamesDuponant;

        return $this;
    }
}
