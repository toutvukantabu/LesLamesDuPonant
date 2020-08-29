<?php

namespace App\Entity;

use App\Repository\HowWeAreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HowWeAreRepository::class)
 */
class HowWeAre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titleHowWeAre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionHowWeAre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $PhotoHowWeAre;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleHowWeAre(): ?string
    {
        return $this->titleHowWeAre;
    }

    public function setTitleHowWeAre(?string $titleHowWeAre): self
    {
        $this->titleHowWeAre = $titleHowWeAre;

        return $this;
    }

    public function getDescriptionHowWeAre(): ?string
    {
        return $this->descriptionHowWeAre;
    }

    public function setDescriptionHowWeAre(?string $descriptionHowWeAre): self
    {
        $this->descriptionHowWeAre = $descriptionHowWeAre;

        return $this;
    }

    public function getPhotoHowWeAre(): ?string
    {
        return $this->PhotoHowWeAre;
    }

    public function setPhotoHowWeAre(?string $PhotoHowWeAre): self
    {
        $this->PhotoHowWeAre = $PhotoHowWeAre;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
