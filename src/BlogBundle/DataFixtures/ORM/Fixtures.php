<?php
namespace AppBundle\DataFixtures\ORM;

use BlogBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    
    private $dummy_text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum";
    
    public function __construct() 
    {
    
    }
    
    private function randomString($words_count = 1) 
    {
        $words = explode(' ', ucwords($this->dummy_text));
        shuffle($words);
        
        $str = '';
        for ($i = 0; $i < $words_count; $i++) 
        {
            $str .= array_pop($words) . ' ';
        }
        
        $str = trim($str);
        
        return $str;
    }    
    
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 5; $i++) {
            $category = new Category();
            $category->setTitle($this->randomString(2));
            $manager->persist($category);
        }

        $manager->flush();
    }
}