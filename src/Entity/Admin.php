<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use App\Repository\PersonneRepository;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin extends Personne
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
    private $idAdm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Departement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAdm(): ?string
    {
        return $this->idAdm;
    }

    public function setIdAdm(string $idAdm): self
    {
        $this->idAdm = $idAdm;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->Departement;
    }

    public function setDepartement(string $Departement): self
    {
        $this->Departement = $Departement;

        return $this;
    }
}
