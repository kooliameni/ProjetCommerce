<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adminsite
 *
 * @ORM\Table(name="adminsite")
 * @ORM\Entity
 */
class Adminsite
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
     * @ORM\Column(name="login", type="string", length=100, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="motdepasse", type="string", length=45, nullable=true)
     */
    private $motdepasse;



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
     * @return Adminsite
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
     * @return Adminsite
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
}
