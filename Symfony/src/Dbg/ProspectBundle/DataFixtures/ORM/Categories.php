<?php
// src/Dbg/ProspectBundle/DataFixtures/ORM/Categories.php
 namespace Dbg\ProspectBundle\DataFixtures\ORM;             
 use Doctrine\Common\DataFixtures\FixtureInterface;
 use Doctrine\Common\Persistence\ObjectManager;
 use Dbg\ProspectBundle\Entity\Categorie;
 
 Class Categories implements FixtureInterface
 {
 public function load (ObjectManager $manager)
 {
     $noms = array (
	     'Synfony3',
		 'Doctrine2',
		 'Tutoriel',
		 'Evenement'
		 );
	 
	 foreach ($noms as $i => $nom)
	 {
	     $liste_categorie[$i] = new Categorie();
		 $liste_categorie[$i]->setNom($nom);
		 $manager->persist($liste_categorie[$i]);
	 }
	 $manager->flush();
 }
  // … vos autres getters/setters
}