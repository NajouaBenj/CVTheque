<?php

namespace App\Entity;

use App\Repository\RecruteurRepository;
use App\Repository\PersonneRepository;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecruteurRepository::class)
 */
class Recruteur extends Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IdRecr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $courrier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEtablisement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecr(): ?string
    {
        return $this->IdRecr;
    }

    public function setIdRecr(string $IdRecr): self
    {
        $this->IdRecr = $IdRecr;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getCourrier(): ?string
    {
        return $this->courrier;
    }

    public function setCourrier(string $courrier): self
    {
        $this->courrier = $courrier;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getNomEtablisement(): ?string
    {
        return $this->NomEtablisement;
    }

    public function setNomEtablisement(string $NomEtablisement): self
    {
        $this->NomEtablisement = $NomEtablisement;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }
}
