<?php


namespace Cady\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cady\UserBundle\Entity\Produit;
use Cady\UserBundle\Entity\Categorie;


class CategorieController  extends Controller
{
  public function categorieListeProduitsAction($id)
    {
          $em=$this->getDoctrine()->getManager();
          $query=$em->createQuery('SELECT p FROM CadyUserBundle:Produit p where p.categoriecategorie=:id ' );
          $query->setParameter('id',$id);
          $produits=$query->getResult();
      
        
        return $this->render('CadyUserBundle:Default:categorie.html.twig',array('produits'=>$produits));
    }
    public function categoriListeAction()
            { $em=$this->getDoctrine()->getManager();
            $query=$em->createQuery('SELECT c FROM CadyUserBundle:Categorie c  ' );
            $categories=$query->getResult();
            return (array('categories'=>$categories));
        
            }
}
