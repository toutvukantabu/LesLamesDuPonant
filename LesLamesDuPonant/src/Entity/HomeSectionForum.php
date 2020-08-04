<?php

namespace App\Entity;

use App\Repository\HomeSectionForumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeSectionForumRepository::class)
 */
class HomeSectionForum
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
    private $sectionTitleForum;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sectionDateForum;

    /**
     * @ORM\OneToMany(targetEntity=CategoryForum::class, mappedBy="SectionCategoryForum")
     */
    private $categoryHomeSectionForum;

    public function __construct()
    {
        $this->categoryHomeSectionForum = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSectionTitleForum(): ?string
    {
        return $this->sectionTitleForum;
    }

    public function setSectionTitleForum(?string $sectionTitleForum): self
    {
        $this->sectionTitleForum = $sectionTitleForum;

        return $this;
    }

    public function getSectionDateForum(): ?\DateTimeInterface
    {
        return $this->sectionDateForum;
    }

    public function setSectionDateForum(?\DateTimeInterface $sectionDateForum): self
    {
        $this->sectionDateForum = $sectionDateForum;

        return $this;
    }

    /**
     * @return Collection|CategoryForum[]
     */
    public function getCategoryHomeSectionForum(): Collection
    {
        return $this->categoryHomeSectionForum;
    }

    public function addCategoryHomeSectionForum(CategoryForum $categoryHomeSectionForum): self
    {
        if (!$this->categoryHomeSectionForum->contains($categoryHomeSectionForum)) {
            $this->categoryHomeSectionForum[] = $categoryHomeSectionForum;
            $categoryHomeSectionForum->setSectionCategoryForum($this);
        }

        return $this;
    }

    public function removeCategoryHomeSectionForum(CategoryForum $categoryHomeSectionForum): self
    {
        if ($this->categoryHomeSectionForum->contains($categoryHomeSectionForum)) {
            $this->categoryHomeSectionForum->removeElement($categoryHomeSectionForum);
            // set the owning side to null (unless already changed)
            if ($categoryHomeSectionForum->getSectionCategoryForum() === $this) {
                $categoryHomeSectionForum->setSectionCategoryForum(null);
            }
        }

        return $this;
    }
}
