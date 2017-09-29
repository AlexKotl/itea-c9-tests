<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ShopBundle\Controller\DataController;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Default:index.html.twig');
    }
    
    public function menuAction() 
    {
        return $this->render('ShopBundle:Default:menu.html.twig', [
            'menu' => DataController::$data['categories']
        ]);
    }
    
    public function categoryAction($name) 
    {
        $category = array_filter(
            DataController::$data['categories'],
            function($e) use ($name) {
                return $e['title'] === $name;
            }
        );
        $category = array_pop($category);
        
        $products = array_filter(
            DataController::$data['products'],
            function($e) use ($category) {
                return $e['category_id'] == $category['id'];
            }
        );
        
        return $this->render('ShopBundle:Default:category.html.twig', [
            'items' => $products,
            'category' => $category,
        ]);
    }
    
    public function itemAction($id) {
        $product = array_filter(
            DataController::$data['products'],
            function($e) use ($id) {
                return $e['id'] === $id;
            }
        );
        $product = array_pop($product);
        
        return $this->render('ShopBundle:Default:item.html.twig', [
            'item' => $product
        ]);
    }
}
