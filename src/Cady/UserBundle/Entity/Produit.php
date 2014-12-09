<?php

namespace Cady\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_produit_categorie1_idx", columns={"categorie_idcategorie"})})
 * @ORM\Entity
 */
class Produit
{ const SERVER_PATH_TO_IMAGE_FOLDER = 'images/';
    
   // const SERVER_PATH_TO_IMAGE_FOLDER = '/server/path/to/images';
    /**
     * @var integer
     *
     * @ORM\Column(name="idproduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;
     

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer", nullable=true)
     */
    private $reference;
   
    /**
     *
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    
     private $updated;
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=true)
     */
    private $image;
    
    /**
     * @var UploadedFile
     * 
     * @Assert\File(maxSize="1M")
     * @Assert\Image(mimeTypes={"image/jpg", "image/png"})
     */
    private $file;
     /**
     * @return UploadedFile
     */
    
     public function getFile()
    {
        return $this->file;
    }
 
    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }
      
     /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }
 
         $this->getFile()->move(Produit::ERVER_PATH_TO_IMAGE_FOLDER , 
                 $this->getFile()->getClientOriginalName());
         
       
            $this->setImage ( $this->getFile()->getClientOriginalName());
             $this->setFile(null);
        
    }
    
   
 
   
 
   
/**
 * Lifecycle callback to upload the file to the server
 */
public function lifecycleFileUpload() {
    $this->upload();
}

/**
 * Updates the hash value to force the preUpdate and postUpdate events to fire
 */
public function refreshUpdated() {
    $this->setUpdated(new \DateTime("now"));
}

 
   
    


 
  
    

    
    

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */

    private $libelle;



    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantitee", type="integer", nullable=true)
     */
    private $quantitee;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_idcategorie", referencedColumnName="idcategorie")
     * })
     */
    private $categoriecategorie;



    /**
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Produit
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantitee
     *
     * @param integer $quantitee
     * @return Produit
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
     * Set categoriecategorie
     *
     * @param \Cady\UserBundle\Entity\Categorie $categoriecategorie
     * @return Produit
     */
    public function setCategoriecategorie(\Cady\UserBundle\Entity\Categorie $categoriecategorie = null)
    {
        $this->categoriecategorie = $categoriecategorie;

        return $this;
    }

    /**
     * Get categoriecategorie
     *
     * @return \Cady\UserBundle\Entity\Categorie 
     */
    public function getCategoriecategorie()
    {
        return $this->categoriecategorie;
    }
public function setUpdated( $updated) 
        { $this->updated = $updated;
        } 
}