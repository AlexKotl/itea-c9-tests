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
        // create users
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setFirstName($this->randomString(1));
            $user->setLastName($this->randomString(1));
            $user->setEmail($this->randomString(1) . '@' . $this->randomString(1) . '.com' );
            $user->setLastLoginTime(new \DateTime("now"));
            $manager->persist($user);
            
            $users[] = $user;
        }
        
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
                $post->setUser($users[rand(0, 9)]);

                // add some tags to post
                for ($t = 0; $t < 3; $t++) {
                    $tag = new Tag();
                    $tag->setName($this->randomString());
                    $manager->persist($tag);
                    $post->addTag($tag);
                }
                
                $manager->persist($post);
                
                // add comments to post
                for ($m = 0; $m < 7; $m++) {
                    $comment = new Comment();
                    $comment->setText($this->randomString(rand(5, 15)));
                    $comment->setDate(new \DateTime("now"));
                    $comment->setUser($users[rand(0, 9)]);
                    $comment->setPost($post);
                    $comment->setComment($comment);
                    $manager->persist($comment);
                }
            }
        }
        
        

        $manager->flush();
    }
}