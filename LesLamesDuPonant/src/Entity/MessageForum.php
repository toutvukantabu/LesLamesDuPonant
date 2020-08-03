<?php

namespace App\Entity;

use App\Repository\MessageForumRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private $ContentMessageForum;

    /**
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContentMessageForum(): ?string
    {
        return $this->ContentMessageForum;
    }

    public function setContentMessageForum(?string $ContentMessageForum): self
    {
        $this->ContentMessageForum = $ContentMessageForum;

        return $this;
    }

    public function getDatePublicationMessageForum(): ?\DateTimeInterface
    {
        return $this->datePublicationMessageForum;
    }

    public function setDatePublicationMessageForum(\DateTimeInterface $datePublicationMessageForum): self
    {
        $this->datePublicationMessageForum = $datePublicationMessageForum;

        return $this;
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
}
