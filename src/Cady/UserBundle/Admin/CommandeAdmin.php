<?php

namespace Cady\UserBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
class CommandeAdmin extends Admin {
    
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            
         
            ;

    }
      protected function configureFormFields(FormMapper $formMapper)
    {
         $catalogueFieldOptions = array();
        $formMapper
         
            ->add('montant')
            
            
                
        ;
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
        
           ->add('montant')
           
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            
            ->addIdentifier('montant')
            
        ;
    }
    

}
