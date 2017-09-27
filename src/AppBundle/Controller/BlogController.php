<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        $posts = $this->getPosts();
        return $this->render('AppBundle:Blog:index.html.twig', array(
            'posts' => $posts,
        ));
    }

    public function viewAction($id)
    {
        return $this->render('AppBundle:Blog:view.html.twig', array(
            'post' => $this->getPosts()[$id - 1]
        ));
    }

    public function addAction()
    {
        return $this->render('AppBundle:Blog:add.html.twig', array(
            // ...
        ));
    }
    
    protected function getPosts() {
        return [
            [
                'id' => 1,
                'title' => 'New post 1',
                'text' => "Super hi"
            ],
            [
                'id' => 2,
                'title' => 'Oldder post',
                'text' => "Welcome"
            ]
        ];
    }

}
