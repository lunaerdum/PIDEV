<?php

namespace CommandeBundle\Controller;

use CommandeBundle\Entity\Commade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestMatcher;
use UserBundle\Entity\User;

class FournisseurController extends Controller
{
    public function AjoutFournisseurAction( \Symfony\Component\HttpFoundation\Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm('CommandeBundle\Form\RegistreeType', $user);
        $form->handleRequest($request);
        $user->setEnabled(1);
        $user->setRoles(array('ROLE_FORNISSEUR'));


        if ($form->isSubmitted() && $form->isValid()) {


            $em->persist($user);
            $em->flush();


            return $this->redirectToRoute('AfficherFourniseeur');
        }


        return $this->render('CommandeBundle:Fournisseur:AjouterFournisseur.html.twig', array(
            'form' => $form->createView(),


        ));
    }

    public function AfficherFournisseurAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->findAll();
        return $this->render('CommandeBundle:Fournisseur:AfficheFournisseur.html.twig', array(
            'user' => $user,



        ));
    }

    public function deleteFournissurAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Pro = $em->getRepository('UserBundle:User')->find($id);
        $em->remove($Pro);
        $em->flush();


        return $this->redirectToRoute('AfficherFourniseeur');
    }


    public function ModifierFournissuerAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        $editForm = $this->createForm('CommandeBundle\Form\RegistreeType', $user);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('AfficherFourniseeur');
        }

        return $this->render('CommandeBundle:Fournisseur:ModifierFournissue.html.twig', array(
            'produit' => $user,
            'form' => $editForm->createView(),
        ));
    }

}
