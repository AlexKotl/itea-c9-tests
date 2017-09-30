<?php

namespace ShopBundle\Twig;

class AppExtension extends \Twig_Extension 
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('stars', array($this, 'drawStars')),
        );
    }
    
    public function drawStars($number, $star_full, $star_empty)
    {
        $html = '';
        
        for ($i = 1; $i <= 5; $i++) 
        {
             $html .= ($number >= $i ? $star_full : $star_empty) . ' ';   
        }

        return $html;
    }
    
    
}