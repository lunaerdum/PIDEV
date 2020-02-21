<?php

namespace CategorieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CategorieBundle:Default:index.html.twig');
    }
}
