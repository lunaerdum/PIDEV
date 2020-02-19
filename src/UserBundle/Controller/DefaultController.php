<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
    public function ClientAction()
    {
        return $this->render('UserBundle::Page_client.html.twig');
    }
    public function FornisseurAction()
    {
        return $this->render('UserBundle::Page_fornisseur.html.twig');
    }
    public function AdminAction()
    {
        return $this->render('UserBundle::Page_admin.html.twig');
    }
}
