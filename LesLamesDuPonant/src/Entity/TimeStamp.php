<?php

namespace App\Entity;

use App\Repository\TimeStampRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimeStampRepository::class)
 */
class TimeStamp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titleTimeStamp;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $descriptionTimeStamp;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateTimeStamp;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $hourTimeStamp;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleTimeStamp(): ?string
    {
        return $this->titleTimeStamp;
    }

    public function setTitleTimeStamp(?string $titleTimeStamp): self
    {
        $this->titleTimeStamp = $titleTimeStamp;

        return $this;
    }

    public function getDescriptionTimeStamp(): ?string
    {
        return $this->descriptionTimeStamp;
    }

    public function setDescriptionTimeStamp(?string $descriptionTimeStamp): self
    {
        $this->descriptionTimeStamp = $descriptionTimeStamp;

        return $this;
    }

    public function getDateTimeStamp(): ?\DateTimeInterface
    {
        return $this->dateTimeStamp;
    }

    public function setDateTimeStamp(?\DateTimeInterface $dateTimeStamp): self
    {
        $this->dateTimeStamp = $dateTimeStamp;

        return $this;
    }

    public function getHourTimeStamp(): ?\DateTimeInterface
    {
        return $this->hourTimeStamp;
    }

    public function setHourTimeStamp(?\DateTimeInterface $hourTimeStamp): self
    {
        $this->hourTimeStamp = $hourTimeStamp;

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
