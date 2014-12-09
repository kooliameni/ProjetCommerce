<?php

namespace Cady\UserBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProduitAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
         
        $formMapper
         
            ->add('libelle')
            ->add('image', 'file', array(
                    'required'      => false,
                ))
            
            ->add('prix')
            ->add('quantitee') 
            ->add('reference')
             
            ->add('categoriecategorie','sonata_type_model_list')
            
                
        ;
        
    }
  

   

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
      
           ->add('libelle')
            ->add('image')
            ->add('prix')
            ->add('quantitee')  
            ->add('categoriecategorie')
            ->add('reference')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            
            ->addIdentifier('libelle')
            ->add('image')
            ->add('prix')
            ->add('quantitee')  
            ->add('categoriecategorie')
            ->add('reference')
        ;
    }
    public function prePersist($produit) {
        $this->manageFileUpload($produit);
    }

    public function preUpdate($produit) {
        $this->manageFileUpload($produit);
    }

    private function manageFileUpload($produit) {
        if ($produit->getFile()) {
            $produit->refreshUpdated();
        }
    }
}