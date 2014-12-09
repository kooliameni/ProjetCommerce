<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LignePanier
 *
 * @ORM\Table(name="ligne_panier", indexes={@ORM\Index(name="fk_panier_has_produit_produit1_idx", columns={"produit_idproduit"}), @ORM\Index(name="fk_panier_has_produit_panier1_idx", columns={"panier_idpanier"})})
 * @ORM\Entity
 */
class LignePanier
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
     * @var integer
     *
     * @ORM\Column(name="quantitee", type="integer", nullable=true)
     */
    private $quantitee;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \Panier
     *
     * @ORM\ManyToOne(targetEntity="Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="panier_idpanier", referencedColumnName="idpanier")
     * })
     */
    private $panierpanier;

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
     * Set quantitee
     *
     * @param integer $quantitee
     * @return LignePanier
     */
    public function setQuantitee($quantitee)
    {
        $this->quantitee = $quantitee;

        return $this;
    }

    /**
     * Get quantitee
     *
     * @return integer 
     */
    public function getQuantitee()
    {
        return $this->quantitee;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return LignePanier
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set panierpanier
     *
     * @param \Cady\UserBundle\Entity\Panier $panierpanier
     * @return LignePanier
     */
    public function setPanierpanier(\Cady\UserBundle\Entity\Panier $panierpanier = null)
    {
        $this->panierpanier = $panierpanier;

        return $this;
    }

    /**
     * Get panierpanier
     *
     * @return \Cady\UserBundle\Entity\Panier 
     */
    public function getPanierpanier()
    {
        return $this->panierpanier;
    }

    /**
     * Set produitproduit
     *
     * @param \Cady\UserBundle\Entity\Produit $produitproduit
     * @return LignePanier
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
