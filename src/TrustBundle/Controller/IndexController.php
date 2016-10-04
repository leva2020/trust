<?php

namespace TrustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrustBundle:Index:index.html.twig');
    }
}
