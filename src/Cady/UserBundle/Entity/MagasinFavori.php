<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagasinFavori
 *
 * @ORM\Table(name="magasin_favori", indexes={@ORM\Index(name="fk_magasin_favori_client1_idx", columns={"client_idclient"}), @ORM\Index(name="fk_magasin_favori_magasin1_idx", columns={"magasin_idmagasin"})})
 * @ORM\Entity
 */
class MagasinFavori
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
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_idclient", referencedColumnName="idclient")
     * })
     */
    private $clientclient;

    /**
     * @var \Magasin
     *
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="magasin_idmagasin", referencedColumnName="idmagasin")
     * })
     */
    private $magasinmagasin;



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
     * Set clientclient
     *
     * @param \Cady\UserBundle\Entity\Client $clientclient
     * @return MagasinFavori
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
     * Set magasinmagasin
     *
     * @param \Cady\UserBundle\Entity\Magasin $magasinmagasin
     * @return MagasinFavori
     */
    public function setMagasinmagasin(\Cady\UserBundle\Entity\Magasin $magasinmagasin = null)
    {
        $this->magasinmagasin = $magasinmagasin;

        return $this;
    }

    /**
     * Get magasinmagasin
     *
     * @return \Cady\UserBundle\Entity\Magasin 
     */
    public function getMagasinmagasin()
    {
        return $this->magasinmagasin;
    }
}
