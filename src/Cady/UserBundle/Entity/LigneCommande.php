<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande", indexes={@ORM\Index(name="fk_produit_has_commande_commande1_idx", columns={"commande_idcommande"}), @ORM\Index(name="fk_produit_has_commande_produit1_idx", columns={"produit_idproduit"})})
 * @ORM\Entity
 */
class LigneCommande
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
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commande_idcommande", referencedColumnName="idcommande")
     * })
     */
    private $commandecommande;

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
     * @return LigneCommande
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
     * Set commandecommande
     *
     * @param \Cady\UserBundle\Entity\Commande $commandecommande
     * @return LigneCommande
     */
    public function setCommandecommande(\Cady\UserBundle\Entity\Commande $commandecommande = null)
    {
        $this->commandecommande = $commandecommande;

        return $this;
    }

    /**
     * Get commandecommande
     *
     * @return \Cady\UserBundle\Entity\Commande 
     */
    public function getCommandecommande()
    {
        return $this->commandecommande;
    }

    /**
     * Set produitproduit
     *
     * @param \Cady\UserBundle\Entity\Produit $produitproduit
     * @return LigneCommande
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
