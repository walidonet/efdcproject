<?php

namespace SS\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SSFrontBundle:Default:index.html.twig');
    }
}
