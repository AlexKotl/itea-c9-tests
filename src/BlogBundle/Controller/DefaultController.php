<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Post;
use BlogBundle\Entity\User;
use BlogBundle\Entity\Comment;
use BlogBundle\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findBy([], ['id' => 'DESC']);

        return $this->render('BlogBundle:Default:index.html.twig', [
            'posts' => $posts
        ]);
    }
    
    public function detailsAction($id, Request $request) 
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
        $comment = new Comment();
        
        $commentForm = $this->createFormBuilder($comment)
            ->add('text')
            ->add('submit', SubmitType::class)
            ->getForm()
            ->handleRequest($request);
            
        if ($commentForm->isSubmitted() && $commentForm->isValid()) 
        {
            $comment
                ->setDate(new \DateTime("now"))
                ->setUser($post->getUser())
                ->setPost($post);
                
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
        }

        return $this->render('BlogBundle:Default:details.html.twig', [
            'post' => $post,
            'commentForm' => $commentForm->createView(),
        ]);
    }
    
    public function addAction($id, Request $request) 
    {
        
        if ($id > 0) 
        {
            $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
        }
        else 
        {
            $post = new Post();
        }
        
        $form = $this->createFormBuilder($post)
            ->add('title')
            ->add('content')
            ->add('submit', SubmitType::class)
            ->getForm();
            
        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $post->setDate(new \DateTime("now"));
            
            // set random user
            $post->setUser(
                $this->getDoctrine()->getRepository(User::class)->findOneBy([])
            );
            
            // set random category
            $post->setCategory(
                $this->getDoctrine()->getRepository(Category::class)->findOneBy([])    
            );
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            $message = 'Post saved!';
        }
        else 
        {
            $message = '';
        }

        return $this->render('BlogBundle:Default:add.html.twig', [
            'form' => $form->createView(),
            'message' => $message
        ]);
    }
}
