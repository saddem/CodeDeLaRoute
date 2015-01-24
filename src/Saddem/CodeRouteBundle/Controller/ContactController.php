<?php

namespace Saddem\CodeRouteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Saddem\CodeRouteBundle\Entity\Contact;
use Saddem\CodeRouteBundle\Form\ContactType;

class ContactController extends Controller
{
    public function sendAction()
    {
        $contact = new Contact;
        
        $form = $this->createForm(new ContactType , $contact);
        
        $request = $this->get('request');
        if ($request->isMethod('post')){
            $form->bindRequest($request);
           
            if($form->isValid()){
                
                $contact = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                
                return $this->redirect($this->generateUrl('saddem_code_route_homepage'));
                
            }
            
        }
       
        return $this->render('SaddemCodeRouteBundle:Contact:send.html.twig',
        array(
        'form' => $form->createView(),
        ));
    }
}



