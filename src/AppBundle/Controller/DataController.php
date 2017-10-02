<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Product;

class DataController extends Controller
{
    public function saveAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $product = new Product();
        
        return $this->render('AppBundle:Data:save.html.twig', array(
            // ...
        ));
    }

}
