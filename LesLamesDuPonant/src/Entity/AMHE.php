<?php

namespace App\Entity;

use App\Repository\AMHERepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AMHERepository::class)
 */
class AMHE
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
    private $titleAMHE;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $DescriptionAMHE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoOneAMHE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoTwoAMHE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoThreeAMHE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleAMHE(): ?string
    {
        return $this->titleAMHE;
    }

    public function setTitleAMHE(?string $titleAMHE): self
    {
        $this->titleAMHE = $titleAMHE;

        return $this;
    }

    public function getDescriptionAMHE(): ?string
    {
        return $this->DescriptionAMHE;
    }

    public function setDescriptionAMHE(?string $DescriptionAMHE): self
    {
        $this->DescriptionAMHE = $DescriptionAMHE;

        return $this;
    }

    public function getPhotoOneAMHE(): ?string
    {
        return $this->photoOneAMHE;
    }

    public function setPhotoOneAMHE(?string $photoOneAMHE): self
    {
        $this->photoOneAMHE = $photoOneAMHE;

        return $this;
    }

    public function getPhotoTwoAMHE(): ?string
    {
        return $this->photoTwoAMHE;
    }

    public function setPhotoTwoAMHE(?string $photoTwoAMHE): self
    {
        $this->photoTwoAMHE = $photoTwoAMHE;

        return $this;
    }

    public function getPhotoThreeAMHE(): ?string
    {
        return $this->photoThreeAMHE;
    }

    public function setPhotoThreeAMHE(?string $photoThreeAMHE): self
    {
        $this->photoThreeAMHE = $photoThreeAMHE;

        return $this;
    }
}
