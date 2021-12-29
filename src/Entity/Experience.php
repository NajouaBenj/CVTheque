<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
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
    private $IdExp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEntreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PosteOccupe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tacheRealise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateDebut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateFin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdExp(): ?string
    {
        return $this->IdExp;
    }

    public function setIdExp(string $IdExp): self
    {
        $this->IdExp = $IdExp;

        return $this;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->NomEntreprise;
    }

    public function setNomEntreprise(string $NomEntreprise): self
    {
        $this->NomEntreprise = $NomEntreprise;

        return $this;
    }

    public function getPosteOccupe(): ?string
    {
        return $this->PosteOccupe;
    }

    public function setPosteOccupe(string $PosteOccupe): self
    {
        $this->PosteOccupe = $PosteOccupe;

        return $this;
    }

    public function getTacheRealise(): ?string
    {
        return $this->tacheRealise;
    }

    public function setTacheRealise(string $tacheRealise): self
    {
        $this->tacheRealise = $tacheRealise;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->DateDebut;
    }

    public function setDateDebut(string $DateDebut): self
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->DateFin;
    }

    public function setDateFin(string $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
