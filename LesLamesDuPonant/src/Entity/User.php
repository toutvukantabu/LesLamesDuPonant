<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="il y a deja un accompte avec cet email")
 */
class User implements UserInterface
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @Assert\Length(min=8)
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstNameUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastNameUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pseudoUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoAvatarUser;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthdayDateUser;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $postalCodeUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressUser;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $cityUser;

    /**
     * @ORM\OneToMany(targetEntity=MessageForum::class, mappedBy="user")
     */
    private $messageForum;

    /**
     * @ORM\OneToMany(targetEntity=SubjectForum::class, mappedBy="user")
     */
    private $subjectForum;

    /**
     * @ORM\OneToMany(targetEntity=CategoryForum::class, mappedBy="user")
     */
    private $categoryForum;

    /**
     * @ORM\OneToMany(targetEntity=HomeSectionForum::class, mappedBy="user")
     */
    private $homeSectionForum;

    public function __construct()
    {
    $this->roles = [self::ROLE_USER];
    $this->messageForum = new ArrayCollection();
    $this->subjectForum = new ArrayCollection();
    $this->categoryForum = new ArrayCollection();
    $this->homeSectionForum = new ArrayCollection();
    }
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getFirstNameUser(): ?string
    {
        return $this->firstNameUser;
    }

    public function setFirstNameUser(?string $firstNameUser): self
    {
        $this->firstNameUser = $firstNameUser;

        return $this;
    }

    public function getLastNameUser(): ?string
    {
        return $this->lastNameUser;
    }

    public function setLastNameUser(?string $lastNameUser): self
    {
        $this->lastNameUser = $lastNameUser;

        return $this;
    }

    public function getPseudoUser(): ?string
    {
        return $this->pseudoUser;
    }

    public function setPseudoUser(string $pseudoUser): self
    {
        $this->pseudoUser = $pseudoUser;

        return $this;
    }

    public function getPhotoAvatarUser(): ?string
    {
        return $this->photoAvatarUser;
    }

    public function setPhotoAvatarUser(?string $photoAvatarUser): self
    {
        $this->photoAvatarUser = $photoAvatarUser;

        return $this;
    }

    public function getBirthdayDateUser(): ?\DateTimeInterface
    {
        return $this->birthdayDateUser;
    }

    public function setBirthdayDateUser(?\DateTimeInterface $birthdayDateUser): self
    {
        $this->birthdayDateUser = $birthdayDateUser;

        return $this;
    }

    public function getPostalCodeUser(): ?string
    {
        return $this->postalCodeUser;
    }

    public function setPostalCodeUser(?string $postalCodeUser): self
    {
        $this->postalCodeUser = $postalCodeUser;

        return $this;
    }

    public function getAdressUser(): ?string
    {
        return $this->adressUser;
    }

    public function setAdressUser(?string $adressUser): self
    {
        $this->adressUser = $adressUser;

        return $this;
    }

    public function getCityUser(): ?string
    {
        return $this->cityUser;
    }

    public function setCityUser(?string $cityUser): self
    {
        $this->cityUser = $cityUser;

        return $this;
    }

    /**
     * @return Collection|MessageForum[]
     */
    public function getMessageForum(): Collection
    {
        return $this->messageForum;
    }

    public function addMessageForum(MessageForum $messageForum): self
    {
        if (!$this->messageForum->contains($messageForum)) {
            $this->messageForum[] = $messageForum;
            $messageForum->setUser($this);
        }

        return $this;
    }

    public function removeMessageForum(MessageForum $messageForum): self
    {
        if ($this->messageForum->contains($messageForum)) {
            $this->messageForum->removeElement($messageForum);
            // set the owning side to null (unless already changed)
            if ($messageForum->getUser() === $this) {
                $messageForum->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SubjectForum[]
     */
    public function getSubjectForum(): Collection
    {
        return $this->subjectForum;
    }

    public function addSubjectForum(SubjectForum $subjectForum): self
    {
        if (!$this->subjectForum->contains($subjectForum)) {
            $this->subjectForum[] = $subjectForum;
            $subjectForum->setUser($this);
        }

        return $this;
    }

    public function removeSubjectForum(SubjectForum $subjectForum): self
    {
        if ($this->subjectForum->contains($subjectForum)) {
            $this->subjectForum->removeElement($subjectForum);
            // set the owning side to null (unless already changed)
            if ($subjectForum->getUser() === $this) {
                $subjectForum->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CategoryForum[]
     */
    public function getCategoryForum(): Collection
    {
        return $this->categoryForum;
    }

    public function addCategoryForum(CategoryForum $categoryForum): self
    {
        if (!$this->categoryForum->contains($categoryForum)) {
            $this->categoryForum[] = $categoryForum;
            $categoryForum->setUser($this);
        }

        return $this;
    }

    public function removeCategoryForum(CategoryForum $categoryForum): self
    {
        if ($this->categoryForum->contains($categoryForum)) {
            $this->categoryForum->removeElement($categoryForum);
            // set the owning side to null (unless already changed)
            if ($categoryForum->getUser() === $this) {
                $categoryForum->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|HomeSectionForum[]
     */
    public function getHomeSectionForum(): Collection
    {
        return $this->homeSectionForum;
    }

    public function addHomeSectionForum(HomeSectionForum $homeSectionForum): self
    {
        if (!$this->homeSectionForum->contains($homeSectionForum)) {
            $this->homeSectionForum[] = $homeSectionForum;
            $homeSectionForum->setUser($this);
        }

        return $this;
    }

    public function removeHomeSectionForum(HomeSectionForum $homeSectionForum): self
    {
        if ($this->homeSectionForum->contains($homeSectionForum)) {
            $this->homeSectionForum->removeElement($homeSectionForum);
            // set the owning side to null (unless already changed)
            if ($homeSectionForum->getUser() === $this) {
                $homeSectionForum->setUser(null);
            }
        }

        return $this;
    }
}
