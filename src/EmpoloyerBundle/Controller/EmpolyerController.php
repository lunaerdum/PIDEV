<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/18/2020
 * Time: 12:38
 */

namespace EmpoloyerBundle\Controller;


use EmpoloyerBundle\Entity\Employer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmpolyerController extends Controller
{

    public function AjouterEmployerAction( \Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $employer = new Employer();
        $form = $this->createForm('EmpoloyerBundle\Form\EmployerType', $employer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $employer->setNomfile("3.jpg");
            $employer->getUploadFile();
            $em->persist($employer);
            $em->flush();
            return $this->redirectToRoute('Employer_Afficher');
        }
        return $this->render('EmpoloyerBundle:Employer:AjouterEmpolyer.html.twig', array(
            'form' => $form->createView(),

        ));
    }

    public function AfficheEmployerAction()
    {


        $m = $this->getDoctrine()->getManager();
        $employer = $m->getRepository("EmpoloyerBundle:Employer")->findAll();


        return $this->render('EmpoloyerBundle:Employer:AfficherEmpoloyer.html.twig', array(
            'emp' => $employer
        ));
    }

    public function deleteEmployerAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Pro = $em->getRepository('EmpoloyerBundle:Employer')->find($id);
        $em->remove($Pro);
        $em->flush();


        return $this->redirectToRoute('Employer_Afficher');
    }

    public function ModifierProduitAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $employer = $em->getRepository('EmpoloyerBundle:Employer')->find($id);
        $editForm = $this->createForm('EmpoloyerBundle\Form\EmployerType', $employer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($employer);
            $em->flush();

            return $this->redirectToRoute('Employer_Afficher');
        }
        $em = $this->getDoctrine()->getManager();

        return $this->render('EmpoloyerBundle:Employer:ModifierEmployer.html.twig', array(
            'emp' => $employer,
            'form' => $editForm->createView(),
        ));
    }
}