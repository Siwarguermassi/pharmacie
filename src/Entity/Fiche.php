<?php

namespace App\Entity;

use App\Repository\FicheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FicheRepository::class)
 */
class Fiche
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Medicament::class, cascade={"persist", "remove"})
     */
    private $id_med;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix_vente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMed(): ?Medicament
    {
        return $this->id_med;
    }

    public function setIdMed(?Medicament $id_med): self
    {
        $this->id_med = $id_med;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(?int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPrixVente(): ?float
    {
        return $this->prix_vente;
    }

    public function setPrixVente(?float $prix_vente): self
    {
        $this->prix_vente = $prix_vente;

        return $this;
    }
}
