<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produitpm
 *
 * @ORM\Table(name="produitpm")
 * @ORM\Entity
 */
class Produitpm
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprod;

    /**
     * @var string
     *
     * @ORM\Column(name="NomProd", type="string", length=255, nullable=false)
     */
    private $nomprod;

    /**
     * @var int
     *
     * @ORM\Column(name="referenceP", type="integer", nullable=false)
     */
    private $referencep;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteP", type="integer", nullable=false)
     */
    private $quantitep;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="prixPM", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixpm;

    /**
     * @var string
     *
     * @ORM\Column(name="dateAjoutPM", type="string", length=255, nullable=false)
     */
    private $dateajoutpm;

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(string $nomprod): self
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getReferencep(): ?int
    {
        return $this->referencep;
    }

    public function setReferencep(int $referencep): self
    {
        $this->referencep = $referencep;

        return $this;
    }

    public function getQuantitep(): ?int
    {
        return $this->quantitep;
    }

    public function setQuantitep(int $quantitep): self
    {
        $this->quantitep = $quantitep;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrixpm(): ?float
    {
        return $this->prixpm;
    }

    public function setPrixpm(float $prixpm): self
    {
        $this->prixpm = $prixpm;

        return $this;
    }

    public function getDateajoutpm(): ?string
    {
        return $this->dateajoutpm;
    }

    public function setDateajoutpm(string $dateajoutpm): self
    {
        $this->dateajoutpm = $dateajoutpm;

        return $this;
    }


}
