<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_reclamation_client1_idx", columns={"client_idclient"}), @ORM\Index(name="fk_reclamation_magasin1_idx", columns={"magasin_idmagasin"})})
 * @ORM\Entity
 */
class Reclamation
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
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=45, nullable=true)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

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
     * Set texte
     *
     * @param string $texte
     * @return Reclamation
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set clientclient
     *
     * @param \Cady\UserBundle\Entity\Client $clientclient
     * @return Reclamation
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
     * @return Reclamation
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
