<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $WazTypeOffre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $WazTypeBien;

    /**
     * @ORM\Column(type="integer")
     */
    private $WazNnPiece;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $WazReference;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $WazTitre;

    /**
     * @ORM\Column(type="text")
     */
    private $WazDescription;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $WazLocalisation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $WazSurfaceHabitable;

    /**
     * @ORM\Column(type="integer")
     */
    private $WazSurfaceTotale;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $WazOption;

    /**
     * @ORM\Column(type="integer")
     */
    private $WazPrix;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $WazDiagnostique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $WazPhotos;

    /**
     * @ORM\Column(type="date")
     */
    private $WazDateAjout;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $WazDateModif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWazTypeOffre(): ?string
    {
        return $this->WazTypeOffre;
    }

    public function setWazTypeOffre(string $WazTypeOffre): self
    {
        $this->WazTypeOffre = $WazTypeOffre;

        return $this;
    }

    public function getWazTypeBien(): ?string
    {
        return $this->WazTypeBien;
    }

    public function setWazTypeBien(string $WazTypeBien): self
    {
        $this->WazTypeBien = $WazTypeBien;

        return $this;
    }

    public function getWazNnPiece(): ?int
    {
        return $this->WazNnPiece;
    }

    public function setWazNnPiece(int $WazNnPiece): self
    {
        $this->WazNnPiece = $WazNnPiece;

        return $this;
    }

    public function getWazReference(): ?string
    {
        return $this->WazReference;
    }

    public function setWazReference(string $WazReference): self
    {
        $this->WazReference = $WazReference;

        return $this;
    }

    public function getWazTitre(): ?string
    {
        return $this->WazTitre;
    }

    public function setWazTitre(string $WazTitre): self
    {
        $this->WazTitre = $WazTitre;

        return $this;
    }

    public function getWazDescription(): ?string
    {
        return $this->WazDescription;
    }

    public function setWazDescription(string $WazDescription): self
    {
        $this->WazDescription = $WazDescription;

        return $this;
    }

    public function getWazLocalisation(): ?string
    {
        return $this->WazLocalisation;
    }

    public function setWazLocalisation(string $WazLocalisation): self
    {
        $this->WazLocalisation = $WazLocalisation;

        return $this;
    }

    public function getWazSurfaceHabitable(): ?int
    {
        return $this->WazSurfaceHabitable;
    }

    public function setWazSurfaceHabitable(?int $WazSurfaceHabitable): self
    {
        $this->WazSurfaceHabitable = $WazSurfaceHabitable;

        return $this;
    }

    public function getWazSurfaceTotale(): ?int
    {
        return $this->WazSurfaceTotale;
    }

    public function setWazSurfaceTotale(int $WazSurfaceTotale): self
    {
        $this->WazSurfaceTotale = $WazSurfaceTotale;

        return $this;
    }

    public function getWazOption(): ?string
    {
        return $this->WazOption;
    }

    public function setWazOption(?string $WazOption): self
    {
        $this->WazOption = $WazOption;

        return $this;
    }

    public function getWazPrix(): ?int
    {
        return $this->WazPrix;
    }

    public function setWazPrix(int $WazPrix): self
    {
        $this->WazPrix = $WazPrix;

        return $this;
    }
    // public function getformattedprice(): string
    // {
    //     return number_format($this->WazPrix, decimals: 0, decimal_separator: '', thousands_separator: '');
    // }

    public function getWazDiagnostique(): ?string
    {
        return $this->WazDiagnostique;
    }

    public function setWazDiagnostique(string $WazDiagnostique): self
    {
        $this->WazDiagnostique = $WazDiagnostique;

        return $this;
    }

    public function getWazPhotos(): ?string
    {
        return $this->WazPhotos;
    }

    public function setWazPhotos(?string $WazPhotos): self
    {
        $this->WazPhotos = $WazPhotos;

        return $this;
    }

    public function getWazDateAjout(): ?\DateTimeInterface
    {
        return $this->WazDateAjout;
    }

    public function setWazDateAjout(\DateTimeInterface $WazDateAjout): self
    {
        $this->WazDateAjout = $WazDateAjout;

        return $this;
    }

    public function getWazDateModif(): ?\DateTimeInterface
    {
        return $this->WazDateModif;
    }

    public function setWazDateModif(?\DateTimeInterface $WazDateModif): self
    {
        $this->WazDateModif = $WazDateModif;

        return $this;
    }
}
