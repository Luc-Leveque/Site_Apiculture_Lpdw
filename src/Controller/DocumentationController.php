<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DocumentationController extends AbstractController
{
    /**
     * @Route("/documentation", name="documentation_apiculture")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);

        //$articles = $repo->findAll();


        return $this->render('documentation/index.html.twig');
    }

    /**
     * @Route("/documentation/history", name="documentation_history")
     */
    public function showHistory()
    {
        return $this->render('documentation/history.html.twig');
    }

    /**
     * @Route("/documentation/bees", name="documentation_bees")
     */
    public function showBees()
    {
        return $this->render('documentation/bees.html.twig');
    }

    /**
     * @Route("/documentation/hive", name="documentation_hive")
     */
    public function showHive()
    {
        return $this->render('documentation/hive.html.twig');
    }

    /**
     * @Route("/documentation/products", name="documentation_products")
     */
    public function showProducts()
    {
        return $this->render('documentation/products.html.twig');
    }

}