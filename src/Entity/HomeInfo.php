<?php

namespace App\Entity;

use App\Repository\HomeInfoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeInfoRepository::class)
 */
class HomeInfo
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
    private $titleInfo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionInfo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titleCost;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionCost;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titleFaqInfo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionFaqInfo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageOneInfo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageTwoInfo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageThreeInfo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleInfo(): ?string
    {
        return $this->titleInfo;
    }

    public function setTitleInfo(?string $titleInfo): self
    {
        $this->titleInfo = $titleInfo;

        return $this;
    }

    public function getDescriptionInfo(): ?string
    {
        return $this->descriptionInfo;
    }

    public function setDescriptionInfo(?string $descriptionInfo): self
    {
        $this->descriptionInfo = $descriptionInfo;

        return $this;
    }

    public function getTitleCost(): ?string
    {
        return $this->titleCost;
    }

    public function setTitleCost(string $titleCost): self
    {
        $this->titleCost = $titleCost;

        return $this;
    }

    public function getdescriptionCost(): ?string
    {
        return $this->descriptionCost;
    }

    public function setdescriptionCost(?string $descriptionCost): self
    {
        $this->descriptionCost = $descriptionCost;

        return $this;
    }

    public function getTitleFaqInfo(): ?string
    {
        return $this->titleFaqInfo;
    }

    public function setTitleFaqInfo(?string $titleFaqInfo): self
    {
        $this->titleFaqInfo = $titleFaqInfo;

        return $this;
    }

    public function getDescriptionFaqInfo(): ?string
    {
        return $this->descriptionFaqInfo;
    }

    public function setDescriptionFaqInfo(?string $descriptionFaqInfo): self
    {
        $this->descriptionFaqInfo = $descriptionFaqInfo;

        return $this;
    }

    public function getImageOneInfo(): ?string
    {
        return $this->imageOneInfo;
    }

    public function setImageOneInfo(?string $imageOneInfo): self
    {
        $this->imageOneInfo = $imageOneInfo;

        return $this;
    }

    public function getImageTwoInfo(): ?string
    {
        return $this->imageTwoInfo;
    }

    public function setImageTwoInfo(?string $imageTwoInfo): self
    {
        $this->imageTwoInfo = $imageTwoInfo;

        return $this;
    }

    public function getImageThreeInfo(): ?string
    {
        return $this->imageThreeInfo;
    }

    public function setImageThreeInfo(?string $imageThreeInfo): self
    {
        $this->imageThreeInfo = $imageThreeInfo;

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
