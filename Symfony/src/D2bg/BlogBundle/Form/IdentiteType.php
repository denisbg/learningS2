<?php

namespace D2bg\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdentiteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance', 'date', array(
            		'widget' => 'single_text',
            		'input' => 'datetime',
            		'format' => 'dd/MM/yyyy',
            		'attr' => array('class' => 'date')))
            ->add('age')
            ->add('image')
           ->add ('adresses','collection', 
            		array('type' => new AdresseType(),
                          'allow_add'=> true,
                          'allow_delete' => true,
            		))
            ->add('sexe', 'choice', array(
            		'choices' => array(
            				'H' => 'Homme',
            				'F' => 'Femme'
            		),
            		'required'    => true,
            		'empty_value' => 'Indiquer votre sexe',
            		'empty_data'  => null))
            ->add('civilite', 'entity', array(
            		'class' => 'D2bgBlogBundle:Civilite',
            		'property' => 'nom',
            		'multiple'=> false,
            ));
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'D2bg\BlogBundle\Entity\Identite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'd2bg_blogbundle_identite';
    }
}
