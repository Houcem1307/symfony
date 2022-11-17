<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpanier;

    /**
     * @var int
     *
     * @ORM\Column(name="idProd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomProd", type="string", length=255, nullable=true)
     */
    private $nomprod;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixProd", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixprod;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prixRemise", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixremise;

    public function getIdpanier(): ?int
    {
        return $this->idpanier;
    }

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(?string $nomprod): self
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixprod(): ?float
    {
        return $this->prixprod;
    }

    public function setPrixprod(float $prixprod): self
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    public function getPrixremise(): ?float
    {
        return $this->prixremise;
    }

    public function setPrixremise(?float $prixremise): self
    {
        $this->prixremise = $prixremise;

        return $this;
    }


}
