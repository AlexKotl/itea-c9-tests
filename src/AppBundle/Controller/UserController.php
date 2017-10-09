<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function registerAction()
    {
        return $this->render('AppBundle:User:register.html.twig', array(
            // ...
        ));
    }

}
