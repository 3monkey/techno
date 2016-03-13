<?php

namespace Bmonkey\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BmonkeyFrontendBundle:Default:index.html.twig');
    }
}
