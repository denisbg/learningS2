<?php

namespace D2bg\D2bgBundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('D2bgD2bgBundleUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
