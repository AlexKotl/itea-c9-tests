<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Blog:index.html.twig', array(
            // ...
        ));
    }

    public function viewAction()
    {
        return $this->render('AppBundle:Blog:view.html.twig', array(
            // ...
        ));
    }

    public function addAction()
    {
        return $this->render('AppBundle:Blog:add.html.twig', array(
            // ...
        ));
    }

}
