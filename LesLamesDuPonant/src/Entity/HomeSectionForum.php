<?php

namespace App\Entity;

use App\Repository\HomeSectionForumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sectionDateForum;

    /**
     * @ORM\OneToMany(targetEntity=CategoryForum::class, mappedBy="SectionCategoryForum", orphanRemoval=true)
     */
    private $categoryHomeSectionForum;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    /**
     * @Gedmo\Slug(fields={"sectionTitleForum"})
     * @ORM\Column(type="string", length=60)
     */
    private $slug;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

   
}
