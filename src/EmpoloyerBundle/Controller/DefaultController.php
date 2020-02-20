<?php

namespace EmpoloyerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmpoloyerBundle:Default:index.html.twig');
    }
}
