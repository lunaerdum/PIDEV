<?php
/**
 * Created by PhpStorm.
 * User: Rzouga
 * Date: 2/19/2020
 * Time: 14:38
 */

namespace CommandeBundle\Controller;


use CommandeBundle\Entity\Commade;
use CommandeBundle\Entity\message;
use CommandeBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

class CommandeController extends Controller
{
    public function AffecterCommandeAction(Request $request, $id)
    {
        return $this->render('CommandeBundle:Commande:AjouterCommande.html.twig', array(
            'id' => $id,
        ));
    }


    public function AjouterCommandeAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = new Commade();
        $u = $em->getRepository('UserBundle:User')->find(array("id" => $id));
        $form = $this->createForm('CommandeBundle\Form\CommadeType', $commande);
        $commande->setIdFor($u);
        $commande->setEtat("en cours");
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('CommandeAffiche');
        }
        return $this->render('CommandeBundle:Commande:AjouterCommande.html.twig', array(
            'form' => $form->createView(),

        ));
    }

    public function AfficheCommandeAction()
    {


        $m = $this->getDoctrine()->getManager();
        $commande = $m->getRepository("CommandeBundle:Commade")->findAll();

        return $this->render('CommandeBundle:Commande:AfficherCommande.html.twig', array(
            'comm' => $commande
        ));
    }

    public function PdfAction()
    {   $m = $this->getDoctrine()->getManager();
        $commande = $m->getRepository("CommandeBundle:Commade")->findAll();
        $html = $this->renderView('CommandeBundle:Commande:pdf.html.twig',array(
            'comm'=>$commande
        ));
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="commande.pdf"'
            )
        );
    }

    public function deleteCommandeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $Pro = $em->getRepository('CommandeBundle:Commade')->find($id);
        $em->remove($Pro);
        $em->flush();


        return $this->redirectToRoute('CommandeAffiche');
    }

    public function ModifierCommandeAction(Request $request, $id, $idf)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('CommandeBundle:Commade')->find($id);
        $u = $em->getRepository('UserBundle:User')->find(array("id" => $idf));
        $commande->setIdFor($u);
        $editForm = $this->createForm('CommandeBundle\Form\CommadeType', $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('CommandeAffiche');
        }

        return $this->render('CommandeBundle:Commande:ModifierCommande.html.twig', array(
            'commande' => $commande,
            'form' => $editForm->createView(),
        ));
    }

    public function AccepterCommandeAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = new Commade();
        $commande = $em->getRepository('CommandeBundle:Commade')->find(array("id" => $id));

        $commande->setEtat("Accepter");

            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('Page_Fornisseur');
        }



    public function RefuserCommandeAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = new Commade();
        $commande = $em->getRepository('CommandeBundle:Commade')->find(array("id" => $id));

        $commande->setEtat("Réfusée");

        $em->persist($commande);
        $em->flush();
        return $this->redirectToRoute('Page_Fornisseur');
    }
    public function ContactAction (Request $request)
    {
        $maile = new message();
        $form =$this->createForm('CommandeBundle\Form\messageType',$maile);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $subject= $maile->getSubject();
            $mail = $maile->getEmail();
            $object = $maile->getMessage();
            $men = "rihab.bensalah@esprit.tn";
            $message= \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($men)
                ->setTo($mail)
                ->setBody($object);
            $this->get('mailer')->send($message);

        }
        return $this->render('CommandeBundle:Commande:Contact.html.twig',array('form'=>$form->createView()));
    }

}