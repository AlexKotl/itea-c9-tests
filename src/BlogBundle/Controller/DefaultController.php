<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Post;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
         //die($posts[0]->getComments());
        
        return $this->render('BlogBundle:Default:index.html.twig', [
            'posts' => $posts
        ]);
    }
    
    public function detailsAction($id) 
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
        //$comments = 
        
        return $this->render('BlogBundle:Default:details.html.twig', [
            'post' => $post
        ]);
    }
    
    public function addAction(Request $request) 
    {
        $post = new Post();
        
        $form = $this->createFormBuilder($post)
            ->add('title')
            ->add('content')
            ->add('submit', SubmitType::class)
            ->getForm();
        
        
        return $this->render('BlogBundle:Default:add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
