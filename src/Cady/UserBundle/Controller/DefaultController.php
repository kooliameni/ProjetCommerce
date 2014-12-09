<?php

namespace Cady\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $categories=$em->getRepository('CadyUserBundle:Categorie')->findAll();
       
        return $this->render('CadyUserBundle:Default:index.html.twig',array('categories'=>$categories));
    }
     public function favoriteAction()
    {
        return $this->render('CadyUserBundle:Default:favori.html.twig');
    }
     public function panierAction()
    {
        return $this->render('CadyUserBundle:Default:panier.html.twig');
    }
     public function commandeAction()
    {
        return $this->render('CadyUserBundle:Default:commande.html.twig');
    }
     public function connexionAction()
    {
        return $this->render('CadyUserBundle:Default:connexion.html.twig');
    }
     
}
