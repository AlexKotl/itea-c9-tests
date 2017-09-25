<?php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LessonController {
    
    public function welcomeAction(Request $request) {
        
        $response = new Response("<h1>Super Hi {$request->query->get('name')}</h1>");
        
        return $response;
        
    }
    
}
