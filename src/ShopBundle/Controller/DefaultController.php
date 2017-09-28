<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ShopBundle\Controller\DataController;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Default:index.html.twig', [
            'menu' => DataController::$data['categories']
        ]);
    }
}
