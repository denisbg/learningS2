<?php

namespace Dbg\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($name)
	{
        
		return $this->render('DbgBlogBundle:Blog:index.html.twig', array('name' => $name));
    }
	
	public function byebyeAction($name)
	{
        
		return $this->render('DbgBlogBundle:Blog:byebye.html.twig', array('name' => $name));
    }
	public function voirArchiveAction($annee, $mois, $name)
	{
        
		return $this->render('DbgBlogBundle:Blog:archive.html.twig', array('name' => $name, 'annee' => $annee, 'mois' => $mois));
    }
}
