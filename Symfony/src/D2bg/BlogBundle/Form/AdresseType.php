<?php

namespace D2bg\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdresseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('voie')
            ->add('adresse')
            ->add('complement')
            ->add('codepostal')
            ->add('ville')
            ->add('pays')
            
            ->add('identite', 'entity', array(
            		'class' => 'D2bgBlogBundle:Identite',
            		'property' => 'nom',
            		'multiple'=> false))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'D2bg\BlogBundle\Entity\Adresse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'd2bg_blogbundle_adresse';
    }
}
