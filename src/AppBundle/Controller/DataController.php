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
        $product->setName('First product');
        $product->setPrice(59.99);
        $product->setDescription("Very first description.");
        
        $em->persist($product);
        $em->flush();
        
        return $this->render('AppBundle:Data:save.html.twig', array(
            // ...
        ));
    }
    
    public function getAction() 
    {
        
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $product = $repo->find(1);
        
        print_r($product);
        
        return $this->render('AppBundle:Data:save.html.twig', array(
            'product' => $product
        ));  
    }
    
    

}
