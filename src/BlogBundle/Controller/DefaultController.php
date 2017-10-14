<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Post;

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
}
