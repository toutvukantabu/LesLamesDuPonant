<?php

namespace App\Entity;

use App\Repository\CategoryForumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryForumRepository::class)
 */
class CategoryForum
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
    private $titleCategory;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateCategoryForum;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="categoryForum")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=SubjectForum::class, mappedBy="CategorySubjectForum")
     */
    private $subjectCategory;

    /**
     * @ORM\ManyToOne(targetEntity=HomeSectionForum::class, inversedBy="categoryHomeSectionForum")
     */
    private $SectionCategoryForum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    public function __construct()
    {
        $this->subjectCategory = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleCategory(): ?string
    {
        return $this->titleCategory;
    }

    public function setTitleCategory(string $titleCategory): self
    {
        $this->titleCategory = $titleCategory;

        return $this;
    }

    public function getDateCategoryForum(): ?\DateTimeInterface
    {
        return $this->dateCategoryForum;
    }

    public function setDateCategoryForum(?\DateTimeInterface $dateCategoryForum): self
    {
        $this->dateCategoryForum = $dateCategoryForum;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|SubjectForum[]
     */
    public function getSubjectCategory(): Collection
    {
        return $this->subjectCategory;
    }

    public function addSubjectCategory(SubjectForum $subjectCategory): self
    {
        if (!$this->subjectCategory->contains($subjectCategory)) {
            $this->subjectCategory[] = $subjectCategory;
            $subjectCategory->setCategorySubjectForum($this);
        }

        return $this;
    }

    public function removeSubjectCategory(SubjectForum $subjectCategory): self
    {
        if ($this->subjectCategory->contains($subjectCategory)) {
            $this->subjectCategory->removeElement($subjectCategory);
            // set the owning side to null (unless already changed)
            if ($subjectCategory->getCategorySubjectForum() === $this) {
                $subjectCategory->setCategorySubjectForum(null);
            }
        }

        return $this;
    }

    public function getSectionCategoryForum(): ?HomeSectionForum
    {
        return $this->SectionCategoryForum;
    }

    public function setSectionCategoryForum(?HomeSectionForum $SectionCategoryForum): self
    {
        $this->SectionCategoryForum = $SectionCategoryForum;

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
