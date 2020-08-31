<?php

namespace App\Entity;

use App\Repository\SubjectForumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=CategoryForum::class, inversedBy="subjectCategory")
     */
    private $CategorySubjectForum;

    /**
     * @ORM\OneToMany(targetEntity=MessageForum::class, mappedBy="subjectMessageForum")
     */
    private $messageSubjectForum;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    public function __construct()
    {
        $this->messageSubjectForum = new ArrayCollection();
    }

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

    public function getCategorySubjectForum(): ?CategoryForum
    {
        return $this->CategorySubjectForum;
    }

    public function setCategorySubjectForum(?CategoryForum $CategorySubjectForum): self
    {
        $this->CategorySubjectForum = $CategorySubjectForum;

        return $this;
    }

    /**
     * @return Collection|MessageForum[]
     */
    public function getMessageSubjectForum(): Collection
    {
        return $this->messageSubjectForum;
    }

    public function addMessageSubjectForum(MessageForum $messageSubjectForum): self
    {
        if (!$this->messageSubjectForum->contains($messageSubjectForum)) {
            $this->messageSubjectForum[] = $messageSubjectForum;
            $messageSubjectForum->setSubjectMessageForum($this);
        }

        return $this;
    }

    public function removeMessageSubjectForum(MessageForum $messageSubjectForum): self
    {
        if ($this->messageSubjectForum->contains($messageSubjectForum)) {
            $this->messageSubjectForum->removeElement($messageSubjectForum);
            // set the owning side to null (unless already changed)
            if ($messageSubjectForum->getSubjectMessageForum() === $this) {
                $messageSubjectForum->setSubjectMessageForum(null);
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
}
