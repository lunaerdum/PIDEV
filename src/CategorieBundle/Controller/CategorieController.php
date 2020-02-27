<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/16/2020
 * Time: 13:13
 */

namespace CategorieBundle\Controller;


use CategorieBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{

    public function AjoutCategorieAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $categorie = new Categorie();
        $form = $this->createForm('CategorieBundle\Form\CategorieType', $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($categorie);
            $em->flush();

            return $this->redirectToRoute('categorie_Affiche');
        }
        return $this->render('CategorieBundle:Categorie:AjoutCategorie.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function AfficheCategorieAction(Request $request)
    {


        $m = $this->getDoctrine()->getManager();
        $Categorie = $m->getRepository("CategorieBundle:Categorie")->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $Categorie,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',10)

        );


        return $this->render('CategorieBundle:Categorie:AfficherCategorie.html.twig', array(
            'cat' => $result
        ));
    }

    public function deleteCategorieAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Categorie = $em->getRepository('CategorieBundle:Categorie')->find($id);
        $em->remove($Categorie);
        $em->flush();


        return $this->redirectToRoute('categorie_Affiche');
    }

}