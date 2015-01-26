<?php


namespace D2bg\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
	public function indexAction($name)
	{
		return $this->render('UserBundle:Default:index.html.twig', array('name' => $name));
	}
	
	public function loginAction()
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
		{ 
			return $this->redirect($this->generateUrl('d2bgblog_accueil'));
		}
		$request = $this->getRequest();
		$session = $request->getSession();
		
		if ( $request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		return $this->render('D2bgUserBundle:Security:login.html.twig', 
				array(
						'last_username' => $session->get(SecurityContext::LAST_USERNAME),
						'error' => $error,
				));
		}
		
	}

