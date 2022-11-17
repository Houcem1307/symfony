<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="FK_facture_commande", columns={"idCmd"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var int
     *
     * @ORM\Column(name="idCmd", type="integer", nullable=false)
     */
    private $idcmd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idUser", type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCmd", type="string", length=255, nullable=false)
     */
    private $datecmd;

    public function getIdfacture(): ?int
    {
        return $this->idfacture;
    }

    public function getIdcmd(): ?int
    {
        return $this->idcmd;
    }

    public function setIdcmd(int $idcmd): self
    {
        $this->idcmd = $idcmd;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDatecmd(): ?string
    {
        return $this->datecmd;
    }

    public function setDatecmd(string $datecmd): self
    {
        $this->datecmd = $datecmd;

        return $this;
    }


}
