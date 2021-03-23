<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $civilStatus;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroTel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroWhatsapp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienFbk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienYoutube;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienInstagram;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienTwitter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienEmail;


//    /**
//     * @ORM\Column(type="string", length=255)
//     */
//    private $username;

   
    /**
     * @ORM\Column(type="string", length=5000, nullable=true)
     */
    private $bio;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $cin;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_VISITEUR
        $roles[] = 'ROLE_VISITEUR';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    function addRole($role) {
        $this->roles[] = $role;
    }


//    public function getUsername(){
//        return $this->email;
//    }
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

//    public function setUsername(string $username): self
//    {
//        $this->username = $username;
//
//        return $this;
//    }
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function roleStr($role) {
        switch ($role) {
            case 'ROLE_VISITEUR':
                return 'Visiteur';
                break;



            case 'ROLE_ADMIN':
                return 'Administrateur';
                break;
        }
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(?\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(?string $nationalite): self
    {
        $this->nationalite= $nationalite;

        return $this;
    }

    public function getCivilStatus(): ?string
    {
        return $this->civilStatus;
    }

    public function setCivilStatus(?string $civilStatus): self
    {
        $this->civilStatus = $civilStatus;

        return $this;
    }




    public function getNumeroTel(): ?string
    {
        return $this->numeroTel;
    }

    public function setNumeroTel(?string $numeroTel): self
    {
        $this->numeroTel = $numeroTel;

        return $this;
    }

    public function getNumeroWhatsapp(): ?string
    {
        return $this->numeroWhatsapp;
    }

    public function setNumeroWhatsapp(?string $numeroWhatsapp): self
    {
        $this->numeroWhatsapp = $numeroWhatsapp;

        return $this;
    }

    public function getLienFbk(): ?string
    {
        return $this->lienFbk;
    }

    public function setLienFbk(?string $lienFbk): self
    {
        $this->lienFbk = $lienFbk;

        return $this;
    }

    public function getLienYoutube(): ?string
    {
        return $this->lienYoutube;
    }

    public function setLienYoutube(?string $lienYoutube): self
    {
        $this->lienYoutube = $lienYoutube;

        return $this;
    }

    public function getLienInstagram(): ?string
    {
        return $this->lienInstagram;
    }

    public function setLienInstagram(?string $lienInstagram): self
    {
        $this->lienInstagram = $lienInstagram;

        return $this;
    }

    public function getLienTwitter(): ?string
    {
        return $this->lienTwitter;
    }

    public function setLienTwitter(?string $lienTwitter): self
    {
        $this->lienTwitter = $lienTwitter;

        return $this;
    }

    public function getLienEmail(): ?string
    {
        return $this->lienEmail;
    }

    public function setLienEmail(?string $lienEmail): self
    {
        $this->lienEmail = $lienEmail;

        return $this;
    }









     public function __toString()
{
    return $this->getNom();
}

     public function getBio(): ?string
     {
         return $this->bio;
     }

     public function setBio(?string $bio): self
     {
         $this->bio = $bio;

         return $this;
     }

     public function getCin(): ?string
     {
         return $this->cin;
     }

     public function setCin(string $cin): self
     {
         $this->cin = $cin;

         return $this;
     }






}
