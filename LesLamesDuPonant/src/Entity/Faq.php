<?php

namespace App\Entity;

use App\Repository\FaqRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FaqRepository::class)
 */
class Faq
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titleFaq;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $faqDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleFaq(): ?string
    {
        return $this->titleFaq;
    }

    public function setTitleFaq(?string $titleFaq): self
    {
        $this->titleFaq = $titleFaq;

        return $this;
    }

    public function getFaqDescription(): ?string
    {
        return $this->faqDescription;
    }

    public function setFaqDescription(?string $faqDescription): self
    {
        $this->faqDescription = $faqDescription;

        return $this;
    }
}
