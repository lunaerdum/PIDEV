<?php

namespace VehiculBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VehiculBundle:Default:index.html.twig');
    }
}
