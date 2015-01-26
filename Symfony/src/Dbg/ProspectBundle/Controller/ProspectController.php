<?php

namespace Dbg\ProspectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Dbg\ProspectBundle\Entity\Article;
use Dbg\ProspectBundle\Form\ArticleType;

use Dbg\ProspectBundle\Entity\Image;
use Dbg\ProspectBundle\Entity\Commentaire;



class ProspectController extends Controller
{
	var $articles;
	var $help;
	
	function __construct() {
		$this->articles = array (
			    "1"=>
			        array(
					'titre'   => "mon week end a phi phi Island",
					'id'      => 1,
					'auteur'  => 'denis',
					'contenu' => 'super week end dans des super iles',
					'date'    => new \Datetime(),
				),
			    "2"=>
					array(
						'titre'   => "mon week end a pucked Island",
						'id'      => 2,
						'auteur'  => 'denis',
						'contenu' => 'pucked island',
						'date'    => new \Datetime(),
			    ),
			);
		$this->help = array (
			    "1"=>
			        array(
					'titre'   => "creer une entite",
					'id'      => 1,
					'auteur'  => 'denis',
					'contenu' => 'php app/console generate:doctrine:entity',
					'date'    => new \Datetime(),
				),
			);
				}
    public function indexAction($page)
	{   

        if ($page < 1)
        { 
        	throw $this->createNotFoundException("Page inexistante( page = ".$page.")");
        }
		$repository = $this->getDoctrine()->getManager()->getRepository('DbgProspectBundle:Article');
	
		$this->articles = $repository->findAll();

		return $this->render('DbgProspectBundle:Prospect:index.html.twig', 
		    array (
		        'articles' => $this->articles,
		    )
		);
    }
	
   public function helpAction()
	{   

        $this->articles = $this->help;

		return $this->render('DbgProspectBundle:Prospect:help.html.twig', 
		    array (
		        'articles' => $this->articles,
		    )
		);
    }
	
    public function voirAction($id)
	{   
        
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('DbgProspectBundle:Article')->find($id);
		$liste_commentaires = $em->getRepository('DbgProspectBundle:Commentaire')->findAll();
		
		return $this->render('DbgProspectBundle:Prospect:voir.html.twig', array ( 
		   'article'=> $article,
           'liste_commentaires'=>$liste_commentaires));
    }
    
    public function ajouterAction()
    {
		$article = new Article();
		$em = $this->getDoctrine()->getManager();
	    $liste_categories = $em->getRepository('DbgProspectBundle:Categorie')->findAll();
		foreach ($liste_categories as $categorie) {
		    $article->AddCategorie($categorie);
		}
		$form = $this->createForm(new ArticleType, $article);
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
		   $form->bind($request);
		   if ($form->isValid()) {
		      $em = $this->getDoctrine()->getManager();
			  $em->persist($article);
			  $em->flush();
			  return $this->redirect($this->generateUrl('dbgprospect_accueil'));
		   }
		} 
		return $this->render('DbgProspectBundle:Prospect:ajouter.html.twig', array ( 
		   'form'=> $form->createView(),
		   ));
		
		
    }
    
    
    public function modifierAction($id)
    {
        // ici on recupere l'article correspondant a $id 
        $em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('DbgProspectBundle:Article')->find($id);
		if ($article === null) {
		   throw $this->createNotFoundException('Article[id='.$id.'] inexistant .');
		}
		$form = $this->createForm(new ArticleType, $article);
		return $this->render('DbgProspectBundle:Prospect:modifier.html.twig', 
		      array (
		          'article'=> $article,
                  'form' => $form->createView(),		
			  )
		);
    }

    
      public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('DbgProspectBundle:Article')->find($id);
		if ($article === null) {
		   throw $this->createNotFoundException('Article[id='.$id.'] inexistant .');
		}
		$liste_categories = $em->getRepository('DbgProspectBundle:Categorie')->findAll();
		foreach ($liste_categories as $categorie) {
		    $article->removeCategorie($categorie);
		}
		$liste_commentaires = $em->getRepository('DbgProspectBundle:Commentaire')->findAll();
		foreach ($liste_commentaires as $commentaire) {
		    $em->remove($commentaire);
		}
		$em->remove($article);
		$em->flush();
		return $this->redirect($this->generateUrl('dbgprospect_accueil') );
		
		
    }
    
	  public function menuAction($nombre)
	  {
	    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
	    $liste = array(
	      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
	    );
	        
	    return $this->render('DbgProspectBundle:Prospect:menu.html.twig', 
	        array(
	           'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
	        )
	    );
	  }
}
