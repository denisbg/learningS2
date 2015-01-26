<?php
// src/D2bg/BlogBundle/DataFixtures/ORM/Articles.php
namespace D2bg\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use D2bg\BlogBundle\Entity\Article;
use D2bg;
use D2bg\BlogBundle\Entity\Image;
use D2bg\BlogBundle\Entity\Commentaire;
use D2bg\BlogBundle\Entity\Categorie;
use D2bg\BlogBundle\Entity\ArticleCompetence;
use D2bg\BlogBundle\Entity\Competence;

class Articles implements FixtureInterface {
	public function load(ObjectManager $em) {
		$this->articles = array (
				"1" => array (
						'titre' => "Mes vacances a valmorel",
						'id' => 10,
						'auteur' => 'denis',
						'contenu' => 'super vacances aux pays de mon enfance',
						'date' => new \Datetime (),
						'image' => array (
								'url' => 'http://d2bg-consulting.com/images/logo_d2bg.png',
								'alt' => 'http://d2bg-consulting.com/images/logo_d2bg.png' 
						),
						'commentaires' => array (
								array (
										'date' => new \Datetime (),
										'auteur' => 'dynamo',
										'contenu' => 'un magicien au top' 
								),
								array (
										'date' => new \Datetime (),
										'auteur' => 'beau paysage',
										'contenu' => 'c\'est tres tres cher labas' 
								) 
						) 
				),
				"2" => array (
						'titre' => "Mon sejour à la baie d'along",
						'id' => 2,
						'auteur' => 'denis',
						'contenu' => 'baie d\'along',
						'date' => new \Datetime (),
						'image' => array (
								'url' => 'http://www.halongjonques.com/halongjonques2009-images/product/img1/Paradise_cruise_halong.jpg',
								'alt' => 'http://www.halongjonques.com/halongjonques2009-images/product/img1/Paradise_cruise_halong.jpg' 
						),
						'commentaires' => array (
								array (
										'date' => new \Datetime (),
										'auteur' => 'Captain Haddock',
										'contenu' => 'pas mal' 
								),
								array (
										'date' => new \Datetime (),
										'auteur' => 'Tintin',
										'contenu' => "c'est tres tres joli labas" 
								) 
						) 
				) ,
				"3" => array (
						'titre' => "Mes vacances en Corse",
						'id' => 10,
						'auteur' => 'Denis',
						'contenu' => 'Ile magnifique, Bravo',
						'date' => new \Datetime (),
						'image' => array (
								'url' => 'http://d2bg-consulting.com/images/logo_d2bg.png',
								'alt' => 'http://d2bg-consulting.com/images/logo_d2bg.png'
						),
						'commentaires' => array (
								array (
										'date' => new \Datetime (),
										'auteur' => 'dynamo',
										'contenu' => 'et c est bien reel'
								),
								array (
										'date' => new \Datetime (),
										'auteur' => 'lambert',
										'contenu' => 'c\'est tres tres bien la corse'
								)
						)
				),
				"4" => array (
						'titre' => "Mon sejour en Thailande",
						'id' => 2,
						'auteur' => 'denis',
						'contenu' => 'je n ai pas eu la chance de voir les iles',
						'date' => new \Datetime (),
						'image' => array (
								'url' => 'http://www.halongjonques.com/halongjonques2009-images/product/img1/Paradise_cruise_halong.jpg',
								'alt' => 'http://www.halongjonques.com/halongjonques2009-images/product/img1/Paradise_cruise_halong.jpg'
						),
						'commentaires' => array (
								array (
										'date' => new \Datetime (),
										'auteur' => 'Captain Haddock et professeur tournesol',
										'contenu' => 'pas mal'
								),
								array (
										'date' => new \Datetime (),
										'auteur' => 'Tintin et milou',
										'contenu' => "c'est tres tres joli labas"
								)
						)
				)
		)
		;
		
		$noms = array (
				'Synfony3',
				'Doctrine2',
				'Tutoriel',
				'Evenement' 
		);
		
		foreach ( $noms as $i => $nom ) {
			$liste_categorie [$i] = new Categorie ();
			$liste_categorie [$i]->setNom ( $nom );
			$em->persist ( $liste_categorie [$i] );
		}
		
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
		foreach ( $this->articles as $a ) {
			$article = new Article ();
			$article->setAuteur ( $a ['auteur'] );
			$article->setTitre ( $a ['titre'] );
			$article->setContenu ( $a ['contenu'] );
			$article->setDate ( $a ['date'] );

			$image = new Image ();
			$image->setUrl ( $a ['image'] ['url'] );
			$image->setAlt ( $a ['image'] ['alt'] );
			$article->setImage ( $image );
			$liste_categories = $em->getRepository ( 'D2bgBlogBundle:Categorie' )->findAll ();
			foreach ( $liste_categories as $categorie ) {
				$article->AddCategorie ( $categorie );
			}
			$em->persist ( $article );
			$em->flush ();
			
			$liste_competences = $em->getRepository ( 'D2bgBlogBundle:Competence' )->findAll ();
			foreach ( $liste_competences as $competence ) {
				$articlecompetence = new ArticleCompetence();
				$articlecompetence->setArticle($article);
				$articlecompetence->setCompetence($competence);
				$articlecompetence->setNiveau("expert");
				$em->persist ( $articlecompetence );
			}
			
				
			foreach ( $a ['commentaires'] as $c ) {
				$commentaire = new Commentaire ();
				$commentaire->setAuteur ( $c ['auteur'] );
				$commentaire->setContenu ( $c ['contenu'] );
				$commentaire->setDate ( $c ['date'] );
				$commentaire->setArticle ( $article );
				$em->persist ( $commentaire );
			}
			$em->flush ();
		}
		;
		
	}
	// â€¦ vos autres getters/setters
}