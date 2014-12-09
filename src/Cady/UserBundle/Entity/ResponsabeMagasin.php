<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsabeMagasin
 *
 * @ORM\Table(name="responsabe_magasin", indexes={@ORM\Index(name="fk_responsabe_magasin_magasin_idx", columns={"magasin_idmagasin"})})
 * @ORM\Entity
 */
class ResponsabeMagasin
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
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepasse", type="string", length=45, nullable=true)
     */
    private $motdepasse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

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
     * Set login
     *
     * @param string $login
     * @return ResponsabeMagasin
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motdepasse
     *
     * @param string $motdepasse
     * @return ResponsabeMagasin
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string 
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return ResponsabeMagasin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return ResponsabeMagasin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set magasinmagasin
     *
     * @param \Cady\UserBundle\Entity\Magasin $magasinmagasin
     * @return ResponsabeMagasin
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
