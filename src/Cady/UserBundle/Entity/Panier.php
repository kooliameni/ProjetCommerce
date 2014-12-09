<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="fk_panier_client1_idx", columns={"client_idclient"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanier;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

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
     * Get idpanier
     *
     * @return integer 
     */
    public function getIdpanier()
    {
        return $this->idpanier;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Panier
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
     * Set clientclient
     *
     * @param \Cady\UserBundle\Entity\Client $clientclient
     * @return Panier
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
}
