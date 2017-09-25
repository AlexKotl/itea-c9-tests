<?php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LessonController {
    
    public function welcomeAction(Request $request, SessionInterface $session) {
        
        $session->set("name", $request->query->get('name'));
        
        $response = new Response("<h1>Super Hi {$session->get('name')}</h1>");
        
        return $response;
        
    }
    
}
