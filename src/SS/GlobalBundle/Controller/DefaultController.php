<?php

namespace SS\GlobalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SSGlobalBundle:Default:index.html.twig');
    }
}
