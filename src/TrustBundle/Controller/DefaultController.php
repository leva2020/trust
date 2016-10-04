<?php

namespace TrustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrustBundle:Default:index.html.twig');
    }
}
