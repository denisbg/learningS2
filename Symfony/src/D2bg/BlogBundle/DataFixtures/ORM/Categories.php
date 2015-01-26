<?php
// src/D2bg/BlogBundle/DataFixtures/ORM/Categories.php
 namespace D2bg\BlogBundle\DataFixtures\ORM;             
 use Doctrine\Common\DataFixtures\FixtureInterface;
 use Doctrine\Common\Persistence\ObjectManager;
 use Dbg\ProspectBundle\Entity\Categorie;
 
 Class Categories implements FixtureInterface
 {
 public function load (ObjectManager $manager)
 {
    return;
    // traité dans article
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
  // â€¦ vos autres getters/setters
}