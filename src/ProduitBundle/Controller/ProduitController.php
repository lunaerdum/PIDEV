<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/16/2020
 * Time: 14:29
 */

namespace ProduitBundle\Controller;


use ProduitBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller 
{
    public function AjouterProduitAction( \Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = new Produit();
        $form = $this->createForm('ProduitBundle\Form\ProduitType', $produit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $produit->setNomfile("3.jpg");
            $produit->getUploadFile();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_Afficher');
        }
        return $this->render('ProduitBundle:Produit:AjouterProduit.html.twig', array(
            'form' => $form->createView(),

        ));
    }

    public function AfficheProduitAction()
    {


        $m = $this->getDoctrine()->getManager();
        $Produit = $m->getRepository("ProduitBundle:Produit")->findAll();


        return $this->render('ProduitBundle:Produit:AfficherProduit.html.twig', array(
            'prod' => $Produit
        ));
    }

    public function deleteProduitAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Pro = $em->getRepository('ProduitBundle:Produit')->find($id);
        $em->remove($Pro);
        $em->flush();


        return $this->redirectToRoute('produit_Afficher');
    }

    public function ModifierProduitAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository('ProduitBundle:Produit')->find($id);
        $editForm = $this->createForm('ProduitBundle\Form\ProduitType', $produit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('produit_Afficher');
        }

        return $this->render('ProduitBundle:produit:ModifierProduit.html.twig', array(
            'produit' => $produit,
            'form' => $editForm->createView(),
        ));
    }

}