<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="fk_note_produit1_idx", columns={"produit_idproduit"}), @ORM\Index(name="fk_note_client1_idx", columns={"client_idclient"})})
 * @ORM\Entity
 */
class Note
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
     * @ORM\Column(name="valeur", type="integer", nullable=true)
     */
    private $valeur;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_idclient", referencedColumnName="idclient")
     * })
     */
    private $clientclient;

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
     * Set valeur
     *
     * @param integer $valeur
     * @return Note
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set clientclient
     *
     * @param \Cady\UserBundle\Entity\Client $clientclient
     * @return Note
     */
    public function setClientclient(\Cady\UserBundle\Entity\Client $clientclient = null)
    {
        $this->clientclient = $clientclient;

        return $this;
    }

    /**
     * Get clientclient
     *
     * @return \Cady\UserBundle\Entity\Client 
     */
    public function getClientclient()
    {
        return $this->clientclient;
    }

    /**
     * Set produitproduit
     *
     * @param \Cady\UserBundle\Entity\Produit $produitproduit
     * @return Note
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
