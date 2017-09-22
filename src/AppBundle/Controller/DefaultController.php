<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    public function blogAction($page) {
        die("BLOG page {$page}");  
    }
    
    public function newsAction($name = '', $page = 1, $order = '', $sort = '', $lang = 'ua') {
        if ($name !== '') {
            die("You are viewving news '{$name}'");
        }
        
        die("You are on news action. Page: {$page}. " 
            . ($order !== '' ? "Sorted by {$sort}. " : '')
            . ($order !== '' ? "Ordered by {$order}. " : '')
            . ($lang !== '' ? "Language: {$lang}. " : '')
        );
    }
}
