<?php

namespace App\Entity;

use App\Repository\MessageForumRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * @ORM\Entity(repositoryClass=MessageForumRepository::class)
 */
class MessageForum
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentMessageForum;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $datePublicationMessageForum;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoMessageForum;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="messageForum")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=SubjectForum::class, inversedBy="messageSubjectForum")
     */
    private $subjectMessageForum;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    /**
     * @Gedmo\Slug(fields={"contentMessageForum"})
     * @ORM\Column(type="string", length=60)
     */
    private $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContentMessageForum(): ?string
    {
        return $this->contentMessageForum;
    }

    public function setContentMessageForum(?string $contentMessageForum): self
    {
        $this->contentMessageForum = $contentMessageForum;

        return $this;
    }

    public function getDatePublicationMessageForum(): ?\DateTimeInterface
    {
        return $this->datePublicationMessageForum;
    }


    public function getPhotoMessageForum(): ?string
    {
        return $this->photoMessageForum;
    }

    public function setPhotoMessageForum(?string $photoMessageForum): self
    {
        $this->photoMessageForum = $photoMessageForum;

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

    public function getSubjectMessageForum(): ?SubjectForum
    {
        return $this->subjectMessageForum;
    }

    public function setSubjectMessageForum(?SubjectForum $subjectMessageForum): self
    {
        $this->subjectMessageForum = $subjectMessageForum;

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
