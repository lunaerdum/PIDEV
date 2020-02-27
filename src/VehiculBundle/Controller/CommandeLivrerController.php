<?php

namespace VehiculBundle\Controller;

use PanierBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VehiculBundle\Entity\CommandeLivrer;
use VehiculBundle\Entity\Vehicule;

class CommandeLivrerController extends Controller
{
    public function AffecterLivraisonAction( \Symfony\Component\HttpFoundation\Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $livraison = new CommandeLivrer();
        $p=$em->getRepository('PanierBundle:Panier')->find(array("id" =>$id));

        $livraison->setIdPa($p);

        $form = $this->createForm('VehiculBundle\Form\CommandeLivrerType', $livraison);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ix = $request->get('vehiculbundle_commandelivrer');

            $veh = $em->getRepository('VehiculBundle:Vehicule')->find($ix['id_veh']);
            $veh->setDisponiblite('false');
            $em->persist($livraison);
            $em->flush();
            return $this->redirectToRoute('All_Livraison');
        }
        return $this->render('VehiculBundle:CommandeLivrer:AffecterLivraison.html.twig', array(
            'form' => $form->createView(),

        ));
    }

    public function AffichelivraisonAction()
    {


        $m = $this->getDoctrine()->getManager();
        $liv = $m->getRepository("VehiculBundle:CommandeLivrer")->findAll();


        return $this->render('VehiculBundle:CommandeLivrer:AfficherLivraison.html.twig', array(
            'liv' => $liv
        ));
    }

    public function ModifierVehiculeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('VehiculBundle:CommandeLivrer')->find($id);
        $editForm = $this->createForm('VehiculBundle\Form\CommandeLivrerType', $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('All_Livraison');
        }

        return $this->render('VehiculBundle:CommandeLivrer:ModifierLivraison.html.twig', array(
            'vehicule' => $commande,
            'form' => $editForm->createView(),
        ));
    }

    public function deleteLivraisonAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $vehicule = $em->getRepository('VehiculBundle:CommandeLivrer')->find($id);
        $em->remove($vehicule);
        $em->flush();


        return $this->redirectToRoute('All_Livraison');
    }



}
