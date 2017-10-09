<?php

namespace AppBundle\Controller;

use BlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserController extends Controller
{
    public function registerAction(Request $request)
    {
        $user = new User();
        
        $form = $this->createFormBuilder($user)
            ->add('first_name')
            ->add('last_name')
            ->add('email')
            ->add('submit', SubmitType::class)
            ->getForm();
            
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->redirectToRoute("register_success");
            
        }
        
        return $this->render('AppBundle:User:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function registerSuccessAction() {
        return $this->render('AppBundle:User:register.html.twig', array(
            'message' => "User registered"
        ));
    }

}
