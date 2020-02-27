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
        $m = $this->getDoctrine()->getManager();
        $commande = $m->getRepository("CommandeBundle:Commade")->findBy(array("id_for"=> $this->getUser()->getId()));


        return $this->render('UserBundle::Page_fornisseur.html.twig', array(
            'comm' => $commande
        ));
    }
    public function AdminAction()
    {
        return $this->render('UserBundle::Page_admin.html.twig');
    }
}
