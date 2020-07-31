<?php

namespace App\Entity;

use App\Repository\CategoryForumRepository;
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
     * @ORM\Column(type="string", length=255)
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
}
