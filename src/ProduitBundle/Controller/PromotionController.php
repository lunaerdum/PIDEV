<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/16/2020
 * Time: 15:29
 */

namespace ProduitBundle\Controller;


use Doctrine\ORM\Query\AST\Functions\CurrentDateFunction;
use ProduitBundle\Entity\Promotion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ProduitBundle\Entity\Produit;

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
            $val=$em->getRepository(Produit::class)->find($Promotion->getIdProduit());

                $val->setNvPrix(($val->getPrix() * (100 -$Promotion->getValeur()) )/100);
                $em->flush();
                $em->persist($val);


            return $this->redirectToRoute('Promotion_Affiche');
        }

        return $this->render('ProduitBundle:Promotion:AjoutPromotion.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function AffichePromotionAction(Request $request)
    {


        $m = $this->getDoctrine()->getManager();
        $Pro = $m->getRepository("ProduitBundle:Promotion")->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $Pro,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',10)

        );

        return $this->render('ProduitBundle:Promotion:AfficherPromotion.html.twig', array(
            'pro' => $result
        ));
    }


    public function deletePromotionAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $Pro=$em->getRepository(Promotion::class)->find($id);
        $produit=$em->getRepository(Produit::class)->find($Pro->getIdProduit());
        $produit->setNvprix(0);
        $em->flush();
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