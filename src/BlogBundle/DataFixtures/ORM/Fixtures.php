<?php
namespace AppBundle\DataFixtures\ORM;

use BlogBundle\Entity\Category;
use BlogBundle\Entity\Post;
use BlogBundle\Entity\Comment;
use BlogBundle\Entity\Tag;
use BlogBundle\Entity\User;
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

        // fill in categories
        for ($i = 0; $i < 5; $i++) {
            $category = new Category();
            $category->setTitle($this->randomString(2));
            $manager->persist($category);
            
            // fill in posts
            for ($n = 0; $n < 15; $n++) {
                $post = new Post();
                $post->setTitle($this->randomString(5));
                $post->setContent($this->randomString(50));
                $post->setDate(new \DateTime("now"));
                $post->setCategory($category);
                //$post->setUser(new \DateTime("now"));
                $manager->persist($post);
            }
        }
        
        

        $manager->flush();
    }
}