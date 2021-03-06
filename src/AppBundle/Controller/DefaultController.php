<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    public function blogAction($page) {
        // $category = new Category();
        // $category->setName("new category");
        
        // $product = new Product();
        // $product->setName("First");
        // $product->setPrice(99);
        // $product->setDescription("Description");
        // $product->setCategory($category);
        
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($category);
        // $em->persist($product);
        // $em->flush();
        
        $repo = $this->getDoctrine()->getRepository(Product::class);
        $title = $repo->find(2)->getName();
        //die($title);
        
        $em = $this->getDoctrine()->getManager();
        $product = $em->createQuery("select p from AppBundle:Product p where p.name = :name")
            ->setMaxResults(1)
            ->setParameter('name', "First")->getSingleResult();
        //die($product->getName());
        
        $results = $repo->createQueryBuilder('p')
            ->where('p.price > :price')
            ->setParameter('price', 50)
            ->orderBy('p.price', 'DESC')
            ->getQuery()
            ->getResult();
        
        return $this->render('base.html.twig');
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
