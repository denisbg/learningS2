<?php

namespace D2bg\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('D2bgUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
