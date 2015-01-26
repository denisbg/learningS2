<?php
// src/D2bg/BlogBundle/DataFixtures/ORM/Competences.php
namespace D2bg\BlogBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use D2bg\BlogBundle\Entity\Article;
use D2bg;
use D2bg\BlogBundle\Entity\Competence;
use D2bg\BlogBundle\Entity\Image;
use D2bg\BlogBundle\Entity\Commentaire;

Class Competences implements FixtureInterface
{
	public function load (ObjectManager $em)
	{
		return;
		// traité dans article
	$this->competences =  array (
								array (
										'arbo' => '1',
										'contenu' => 'symfony' 
								),
								array (
										'arbo' => '1',
										'contenu' => 'Zend' 
								) 
					
					
		);
		
		
		foreach ( $this->competences as $a ) {
			$competence = new Competence ();
			$competence->setarbo ( $a ['arbo'] );
			$competence->setContenu ( $a ['contenu'] );
			$em->persist ( $competence );
			
		}
		;
		$em->flush ();
	}
	// â€¦ vos autres getters/setters
}