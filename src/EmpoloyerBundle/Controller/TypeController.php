<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/17/2020
 * Time: 15:04
 */

namespace EmpoloyerBundle\Controller;


use EmpoloyerBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TypeController extends  Controller
{

    public function AjoutTypeAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $type = new Type();
        $form = $this->createForm('EmpoloyerBundle\Form\TypeType', $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($type);
            $em->flush();

            return $this->redirectToRoute('Type_AfficherType');
        }
        return $this->render('EmpoloyerBundle:TypeEmpolyer:AjoutType.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function AfficheTypeAction()
    {


        $m = $this->getDoctrine()->getManager();
        $Type = $m->getRepository("EmpoloyerBundle:Type")->findAll();


        return $this->render('EmpoloyerBundle:TypeEmpolyer:AfficherType.html.twig', array(
            'type' => $Type
        ));
    }


    public function deleteTypeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Type= $em->getRepository('EmpoloyerBundle:Type')->find($id);
        $em->remove($Type);
        $em->flush();


        return $this->redirectToRoute('Type_AfficherType');
    }

}