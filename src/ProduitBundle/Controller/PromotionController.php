<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/16/2020
 * Time: 15:29
 */

namespace ProduitBundle\Controller;


use ProduitBundle\Entity\Promotion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PromotionController extends  Controller
{
    public function AjoutPromotionAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $Promotion = new Promotion();
        $form = $this->createForm('ProduitBundle\Form\PromotionType', $Promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($Promotion);
            $em->flush();

            return $this->redirectToRoute('Promotion_Affiche');
        }
        return $this->render('ProduitBundle:Promotion:AjoutPromotion.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function AffichePromotionAction()
    {


        $m = $this->getDoctrine()->getManager();
        $Pro = $m->getRepository("ProduitBundle:Promotion")->findAll();


        return $this->render('ProduitBundle:Promotion:AfficherPromotion.html.twig', array(
            'pro' => $Pro
        ));
    }


    public function deletePromotionAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Pro = $em->getRepository('ProduitBundle:Promotion')->find($id);
        $em->remove($Pro);
        $em->flush();


        return $this->redirectToRoute('Promotion_Affiche');
    }

    public function ModifierPromotionAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $promotion = $em->getRepository('ProduitBundle:Promotion')->find($id);
        $editForm = $this->createForm('ProduitBundle\Form\PromotionType', $promotion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($promotion);
            $em->flush();

            return $this->redirectToRoute('Promotion_Affiche');
        }
        $em = $this->getDoctrine()->getManager();

        return $this->render('ProduitBundle:Promotion:ModifierPromotion.html.twig', array(
            'produit' => $promotion,
            'form' => $editForm->createView(),
        ));
    }
}