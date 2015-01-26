<?php

namespace D2bg\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use D2bg\BlogBundle\Entity\Article;
use D2bg;
use D2bg\BlogBundle\Entity\Image;
use D2bg\BlogBundle\Entity\Commentaire;
use D2bg\BlogBundle\Form\ArticleType;

class BlogController extends Controller {
	var $articles;
	var $help;
	var $webmaster;
	function __construct() {
		$this->help = array (
				"1" => array (
						'titre' => "creer une entite",
						'id' => 1,
						'auteur' => 'denis',
						'contenu' => 'php app/console generate:doctrine:entity',
						'date' => new \Datetime () 
				) 
		);
	}
	public function initdbAction() {
		// lancer la creation des fixtures
		return $this->redirect ( $this->generateUrl ( 'd2bgblog_accueil' ) );
	}
	public function indexAction($page, $nbpp = 3) {
		if ($page < 1) {
			throw $this->createNotFoundException ( "Page inexistante( page = " . $page . ")" );
		}
		$rep = $this->getDoctrine ()->getManager ()->getRepository ( 'D2bgBlogBundle:Article' );
		$this->articles = $rep->getArticles ( $nbpp, $page );
		return $this->render ( 'D2bgBlogBundle:Blog:index.html.twig', array (
				'articles' => $this->articles,
				'page' => $page,
				'nombrePage' => ceil ( count ( $this->articles ) / $nbpp ),
				'webmaster' => $this->container->getParameter ( 'webmaster' ) 
		) );
	}
	public function voirAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		$article = $em->getRepository ( 'D2bgBlogBundle:Article' )->find ( $id );
		$liste_commentaires = // $article->getCommentaires();
$this->_em->getRepository ( 'D2bgBlogBundle:Commentaire' )->findByArticle ( $article->getId () );
		
		$liste_articlecompetences = $em->getRepository ( 'D2bgBlogBundle:ArticleCompetence' )->findByArticle ( $article->getId () );
		
		return $this->render ( 'D2bgBlogBundle:Blog:voir.html.twig', array (
				'article' => $article,
				'liste_commentaires' => $liste_commentaires,
				'liste_articlecompetences' => $liste_articlecompetences,
				'webmaster' => $this->webmaster 
		) );
	}
	public function modifierAction($id) {
		return $this->render ( 'D2bgBlogBundle:Blog:modifier.html.twig', array (
				'id' => $id 
		) );
	}
	public function supprimerAction($id) {
		return $this->render ( 'D2bgBlogBundle:Blog:supprimer.html.twig', array (
				'id' => $id 
		) );
	}
	public function ajouterAction() {
		$this->get ( 'Session' )->getFlashBag ()->add ( 'info', 'Message enregistr�' );
		$this->getRequest ()->getSession ()->getFlashBag ()->add ( 'info', 'Message enregistr� pour les incredules' );
		$article = new Article ();
		
		$em = $this->getDoctrine ()->getManager ();
		$liste_categories = $em->getRepository ( 'D2bgBlogBundle:Categorie' )->findAll ();
		foreach ( $liste_categories as $categorie ) {
			$article->AddCategorie ( $categorie );
		}
		$form = $this->createForm ( new ArticleType (), $article );
		$request = $this->getRequest ();
		if ($request->getMethod () == 'POST') {
			$form->bind ( $request );
			if ($form->isValid ()) {
				$article->getImage ()->upload ();
				$em = $this->getDoctrine ()->getManager ();
				$em->persist ( $article );
				$em->flush ();
				return $this->redirect ( $this->generateUrl ( 'd2bgblog_accueil' ) );
			}
		}
		return $this->render ( 'D2bgBlogBundle:Blog:ajouter.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	public function envoimailAction() {
		$contenu = $this->renderView ( 'D2bgBlogBundle:Blog:email.txt.twig', array (
				'destinataire' => 'Nicolas' 
		) );
		$mailer = $this->get ( 'mailer' );
		$message = \Swift_Message::newInstance ()->setSubject ( 'Hello Dennis' )->setFrom ( 'tutorial@symfony2.com' )->setTo ( "d.bouvier380@orange.fr" )->setbody ( $contenu );
		$mailer->send ( $message );
		return $this->render ( 'D2bgBlogBundle:Blog:envoimail.html.twig', array (
				'destinataire' => 'Nicolas',
				'message' => $contenu 
		) );
	}
	public function menuAction($nombre) {
		// On fixe en dur une liste ici, bien entendu par la suite on la r�cup�rera depuis la BDD !
		$liste = array (
				array (
						'id' => 2,
						'titre' => 'Mon dernier weekend !' 
				),
				array (
						'id' => 1,
						'titre' => 'EZ publish !' 
				) 
		);
		
		return $this->render ( 'D2bgBlogBundle:Blog:menu.html.twig', array (
				'liste_articles' => $liste 
		) ); // C'est ici tout l'int�r�t : le contr�leur passe les variables n�cessaires au template !
	}
}
