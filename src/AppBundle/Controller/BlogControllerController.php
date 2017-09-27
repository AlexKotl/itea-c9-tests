<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogControllerController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:BlogController:index.html.twig', array(
            // ...
        ));
    }

    public function viewAction()
    {
        return $this->render('AppBundle:BlogController:view.html.twig', array(
            // ...
        ));
    }

    public function addAction()
    {
        return $this->render('AppBundle:BlogController:add.html.twig', array(
            // ...
        ));
    }

}
