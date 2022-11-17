<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevent;

    /**
     * @var string
     *
     * @ORM\Column(name="NomEvent", type="string", length=20, nullable=false)
     */
    private $nomevent;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseEvent", type="string", length=20, nullable=false)
     */
    private $adresseevent;

    /**
     * @var int
     *
     * @ORM\Column(name="CapaciteEvent", type="integer", nullable=false)
     */
    private $capaciteevent;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrTicketAchete", type="integer", nullable=false)
     */
    private $nbrticketachete;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDebutEvent", type="string", length=255, nullable=false)
     */
    private $datedebutevent;

    /**
     * @var string
     *
     * @ORM\Column(name="DateFinEvent", type="string", length=255, nullable=false)
     */
    private $datefinevent;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeEvent", type="string", length=20, nullable=false)
     */
    private $typeevent;

    /**
     * @var string
     *
     * @ORM\Column(name="CategorieEvent", type="string", length=20, nullable=false)
     */
    private $categorieevent;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixEntre", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixentre;

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=500, nullable=false)
     */
    private $image1;

    public function getIdevent(): ?int
    {
        return $this->idevent;
    }

    public function getNomevent(): ?string
    {
        return $this->nomevent;
    }

    public function setNomevent(string $nomevent): self
    {
        $this->nomevent = $nomevent;

        return $this;
    }

    public function getAdresseevent(): ?string
    {
        return $this->adresseevent;
    }

    public function setAdresseevent(string $adresseevent): self
    {
        $this->adresseevent = $adresseevent;

        return $this;
    }

    public function getCapaciteevent(): ?int
    {
        return $this->capaciteevent;
    }

    public function setCapaciteevent(int $capaciteevent): self
    {
        $this->capaciteevent = $capaciteevent;

        return $this;
    }

    public function getNbrticketachete(): ?int
    {
        return $this->nbrticketachete;
    }

    public function setNbrticketachete(int $nbrticketachete): self
    {
        $this->nbrticketachete = $nbrticketachete;

        return $this;
    }

    public function getDatedebutevent(): ?string
    {
        return $this->datedebutevent;
    }

    public function setDatedebutevent(string $datedebutevent): self
    {
        $this->datedebutevent = $datedebutevent;

        return $this;
    }

    public function getDatefinevent(): ?string
    {
        return $this->datefinevent;
    }

    public function setDatefinevent(string $datefinevent): self
    {
        $this->datefinevent = $datefinevent;

        return $this;
    }

    public function getTypeevent(): ?string
    {
        return $this->typeevent;
    }

    public function setTypeevent(string $typeevent): self
    {
        $this->typeevent = $typeevent;

        return $this;
    }

    public function getCategorieevent(): ?string
    {
        return $this->categorieevent;
    }

    public function setCategorieevent(string $categorieevent): self
    {
        $this->categorieevent = $categorieevent;

        return $this;
    }

    public function getPrixentre(): ?float
    {
        return $this->prixentre;
    }

    public function setPrixentre(float $prixentre): self
    {
        $this->prixentre = $prixentre;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }


}
