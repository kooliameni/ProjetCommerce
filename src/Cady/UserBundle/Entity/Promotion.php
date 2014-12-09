<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="fk_promotion_produit1_idx", columns={"produit_idproduit"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=true)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_promo", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixPromo;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit_idproduit", referencedColumnName="idproduit")
     * })
     */
    private $produitproduit;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     * @return Promotion
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Promotion
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set prixPromo
     *
     * @param float $prixPromo
     * @return Promotion
     */
    public function setPrixPromo($prixPromo)
    {
        $this->prixPromo = $prixPromo;

        return $this;
    }

    /**
     * Get prixPromo
     *
     * @return float 
     */
    public function getPrixPromo()
    {
        return $this->prixPromo;
    }

    /**
     * Set produitproduit
     *
     * @param \Cady\UserBundle\Entity\Produit $produitproduit
     * @return Promotion
     */
    public function setProduitproduit(\Cady\UserBundle\Entity\Produit $produitproduit = null)
    {
        $this->produitproduit = $produitproduit;

        return $this;
    }

    /**
     * Get produitproduit
     *
     * @return \Cady\UserBundle\Entity\Produit 
     */
    public function getProduitproduit()
    {
        return $this->produitproduit;
    }
}
