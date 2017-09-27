<?php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LessonController extends Controller {
    
    public function welcomeAction(Request $request, SessionInterface $session) {
        
        $session->set("name", $request->query->get('name'));
        $name = $session->get('name');
        
        $logger = $this->get("logger");
        $logger->warning("Testing feaure");
        
        $response = new Response("<h1>Super Hi {$session->get('name')}</h1>");
        
        return $this->render("/index/welcome.html.twig", [
            'name' => $name
        ]);
        
    }
    
}
