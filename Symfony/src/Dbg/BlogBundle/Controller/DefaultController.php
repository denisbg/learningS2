<?php

namespace Dbg\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DbgBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
