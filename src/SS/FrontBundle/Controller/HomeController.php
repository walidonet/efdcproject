<?php

namespace SS\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\Translator;

class HomeController extends Controller
{

    public function indexAction()
    {

        return $this->render('@SSFront/Default/index.html.twig');
    }
}
