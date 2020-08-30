<?php

namespace App\Entity;

use App\Repository\HomePicturesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomePicturesRepository::class)
 */
class HomePictures
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $homeLogoPicture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $homeTitlePicture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $homeParallax1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $homeParallax2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHomeLogoPicture(): ?string
    {
        return $this->homeLogoPicture;
    }

    public function setHomeLogoPicture(?string $homeLogoPicture): self
    {
        $this->homeLogoPicture = $homeLogoPicture;

        return $this;
    }

    public function getHomeTitlePicture(): ?string
    {
        return $this->homeTitlePicture;
    }

    public function setHomeTitlePicture(?string $homeTitlePicture): self
    {
        $this->homeTitlePicture = $homeTitlePicture;

        return $this;
    }

    public function getHomeParallax1(): ?string
    {
        return $this->homeParallax1;
    }

    public function setHomeParallax1(?string $homeParallax1): self
    {
        $this->homeParallax1 = $homeParallax1;

        return $this;
    }

    public function getHomeParallax2(): ?string
    {
        return $this->homeParallax2;
    }

    public function setHomeParallax2(?string $homeParallax2): self
    {
        $this->homeParallax2 = $homeParallax2;

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
