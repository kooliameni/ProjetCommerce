<?php

namespace Cady\UserBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PromotionAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
      
        $formMapper
         
            ->add('dateDeb')
            ->add('dateFin')
            ->add('prixPromo')
            ->add('produitproduit','sonata_type_model_list')
            
                
        ;
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('dateDeb')
            ->add('dateFin')
            ->add('prixPromo')
            ->add('produitproduit')
       
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          
            ->add('dateDeb')
            ->add('dateFin')
            ->add('prixPromo')  
            ->add('produitproduit')
         
        ;
    }
}