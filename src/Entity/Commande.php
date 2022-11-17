<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_commande_panier", columns={"idPanier"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCmd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcmd;

    /**
     * @var int
     *
     * @ORM\Column(name="idPanier", type="integer", nullable=false)
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
     * @var int|null
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prixProd", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixprod;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prixRemise", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixremise;

    /**
     * @var string
     *
     * @ORM\Column(name="etatCmd", type="string", length=255, nullable=false)
     */
    private $etatcmd;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCmd", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datecmd;

    public function getIdcmd(): ?int
    {
        return $this->idcmd;
    }

    public function getIdpanier(): ?int
    {
        return $this->idpanier;
    }

    public function setIdpanier(int $idpanier): self
    {
        $this->idpanier = $idpanier;

        return $this;
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

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixprod(): ?float
    {
        return $this->prixprod;
    }

    public function setPrixprod(?float $prixprod): self
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

    public function getEtatcmd(): ?string
    {
        return $this->etatcmd;
    }

    public function setEtatcmd(string $etatcmd): self
    {
        $this->etatcmd = $etatcmd;

        return $this;
    }

    public function getDatecmd(): ?string
    {
        return $this->datecmd;
    }


}
