<?php

namespace VehiculBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VehiculBundle\Entity\Vehicule;

class VehiculeController extends Controller
{
    public function AjouterVehiculeAction( \Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $vehicule = new Vehicule();
        $vehicule->setDisponiblite('true');
        $form = $this->createForm('VehiculBundle\Form\VehiculeType', $vehicule);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($vehicule);
            $em->flush();
            return $this->redirectToRoute('vehicul_Affiche');
        }
        return $this->render('VehiculBundle:Vehicule:AjouterVehicule.html.twig', array(
            'form' => $form->createView(),

        ));
    }

    public function AfficheVehiculeAction()
    {


        $m = $this->getDoctrine()->getManager();
        $Vehicule = $m->getRepository("VehiculBundle:Vehicule")->findAll();


        return $this->render('VehiculBundle:Vehicule:AfficherVehicule.html.twig', array(
            'v' => $Vehicule
        ));
    }

    public function deleteVehiculeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $vehicule = $em->getRepository('VehiculBundle:Vehicule')->find($id);
        $em->remove($vehicule);
        $em->flush();


        return $this->redirectToRoute('vehicul_Affiche');
    }


    public function ModifierVehiculeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $vehicule = $em->getRepository('VehiculBundle:Vehicule')->find($id);
        $editForm = $this->createForm('VehiculBundle\Form\VehiculeType', $vehicule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($vehicule);
            $em->flush();

            return $this->redirectToRoute('vehicul_Affiche');
        }

        return $this->render('VehiculBundle:Vehicule:ModifierVehicule.html.twig', array(
            'vehicule' => $vehicule,
            'form' => $editForm->createView(),
        ));
    }

}
