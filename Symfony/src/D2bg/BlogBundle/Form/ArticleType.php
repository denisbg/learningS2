<?php

namespace D2bg\BlogBundle\Form;

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
            ->add('date', 'date')
            ->add('titre', 'text')
            ->add('publication', 'checkbox', array('required' => false))
            ->add('auteur', "text")
            ->add('contenu', 'textarea')
            ->add('image', new ImageType())
            ->add('categories','entity',array(
            		'class'=>'D2bgBlogBundle:Categorie',
            		'property'=> 'nom',
            		'multiple'=>true   ))
            ->add('competences','entity',array(
            				'class'=>'D2bgBlogBundle:Competence',
            				'property'=> 'contenu',
            				'multiple'=>true   ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'D2bg\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'd2bg_blogbundle_article';
    }
}
