<?php

namespace App\Entity;

use App\Repository\SubjectForumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubjectForumRepository::class)
 */
class SubjectForum
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
    private $titleSubjectForum;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentSubjectForum;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateSubjectForum;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="subjectForum")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleSubjectForum(): ?string
    {
        return $this->titleSubjectForum;
    }

    public function setTitleSubjectForum(string $titleSubjectForum): self
    {
        $this->titleSubjectForum = $titleSubjectForum;

        return $this;
    }

    public function getContentSubjectForum(): ?string
    {
        return $this->contentSubjectForum;
    }

    public function setContentSubjectForum(?string $contentSubjectForum): self
    {
        $this->contentSubjectForum = $contentSubjectForum;

        return $this;
    }

    public function getDateSubjectForum(): ?\DateTimeInterface
    {
        return $this->dateSubjectForum;
    }

    public function setDateSubjectForum(?\DateTimeInterface $dateSubjectForum): self
    {
        $this->dateSubjectForum = $dateSubjectForum;

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
