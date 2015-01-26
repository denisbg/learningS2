<?php

namespace Dbg\ProspectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
	 
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datedebut')
            ->add('datefin')
            ->add('date')
            ->add('titre')
            ->add('client')
            ->add('donneurdordre')
            ->add('publication', 'checkbox', array('required' => false))
            ->add('auteur')
            ->add('adresse')
            ->add('tel')
            ->add('mail')
            ->add('contenu')
            ->add('image', new ImageType())
			/*
            ->add('categories', 'collection', array('type' =>new CategorieType(),  
			    'allow_add'=> true,
				'allow_delete'=> true ))
				*/
			->add(
			'categories', 
		    'entity', 
				array(
				   'class'    => 'DbgProspectBundle:Categorie',
				   'property' => 'nom',
				   'multiple' => true
				)
			)
        ;
    }
	
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dbg\ProspectBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dbg_prospectbundle_article';
    }
}
