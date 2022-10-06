<?php

namespace App\Entity;

use App\Repository\ContactMessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactMessageRepository::class)
 */
class ContactMessage
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
    private $authorNameContactMessage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $authorLastNamecContactMessage;

    /**
     * @ORM\Column(type="text")
     */
    private $contentContactMessage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailContactMessage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateContactMessage;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $CategoryContactMessage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthorNameContactMessage(): ?string
    {
        return $this->authorNameContactMessage;
    }

    public function setAuthorNameContactMessage(?string $authorNameContactMessage): self
    {
        $this->authorNameContactMessage = $authorNameContactMessage;

        return $this;
    }

    public function getAuthorLastNamecContactMessage(): ?string
    {
        return $this->authorLastNamecContactMessage;
    }

    public function setAuthorLastNamecContactMessage(?string $authorLastNamecContactMessage): self
    {
        $this->authorLastNamecContactMessage = $authorLastNamecContactMessage;

        return $this;
    }

    public function getContentContactMessage(): ?string
    {
        return $this->contentContactMessage;
    }

    public function setContentContactMessage(string $contentContactMessage): self
    {
        $this->contentContactMessage = $contentContactMessage;

        return $this;
    }

    public function getEmailContactMessage(): ?string
    {
        return $this->emailContactMessage;
    }

    public function setEmailContactMessage(string $emailContactMessage): self
    {
        $this->emailContactMessage = $emailContactMessage;

        return $this;
    }

    public function getDateContactMessage(): ?\DateTimeInterface
    {
        return $this->dateContactMessage;
    }

    public function setDateContactMessage(\DateTimeInterface $dateContactMessage): self
    {
        $this->dateContactMessage = $dateContactMessage;

        return $this;
    }

    public function getCategoryContactMessage(): ?string
    {
        return $this->CategoryContactMessage;
    }

    public function setCategoryContactMessage(string $CategoryContactMessage): self
    {
        $this->CategoryContactMessage = $CategoryContactMessage;

        return $this;
    }
}
