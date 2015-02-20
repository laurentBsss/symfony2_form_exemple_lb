<?php

namespace Mt\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Mt\ExoBundle\Entity\Annonces;

class TestFormulaireController extends Controller
{
    public function indexAction(Request $request)

    {   

    	// On crée un objet Annonces

    $annonces = new Annonces();
    $annonces->setDateCre(new \DateTime('now'));
    $annonces->setDateAnnonces(new \DateTime('now'));
    $annonces->setDateSup(new \DateTime('now'));
    $annonces->setDateMaj(new \DateTime('now'));
    $annonces->setTitre('Nouvel article geek');

    // On crée le FormBuilder 
      //$form = $this->get('form.factory')->createBuilder('form', $annonces)
    $form = $this->createFormBuilder($annonces)
    
          ->add('titre','text')
          ->add('dateCre','datetime',array('disabled'=>'true',))
          ->add('auteur','text')
          ->add('util','text')
          ->add('contenuAnnonce','text')
          ->add('prixAnnonce',      'integer')
          ->add('nbligne',      'integer')
           ->add('save',      'submit')
         ->getForm();


         //on verifie la validité  du  form et  l envoi en  Bdd
         if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();

             $em->persist($annonces);

             $em->flush();
         }


        //envoi du  formulaire  a la  vue
        return $this->render('MtExoBundle:Site:testFormulaire.html.twig',
         array('form' => $form->createView(),
            )
    );
    }

   


}
