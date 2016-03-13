<?php

namespace Bmonkey\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BmonkeyBackendBundle:Default:index.html.twig');
    }
}
