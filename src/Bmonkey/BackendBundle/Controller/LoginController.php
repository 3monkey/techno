<?php

namespace Bmonkey\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Bmonkey\BackendBundle\Entity\Usuario;	

class LoginController extends Controller
{	
    public function LoginAction()
    {


    	if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $this->get('session')->get(SecurityContext::AUTHENTICATION_ERROR);
		}
		
    	$last_username = $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME);

        return $this->render('BmonkeyBackendBundle:Login:login.html.twig', array('error' => $error, 'username' => $last_username ));
    }
}
