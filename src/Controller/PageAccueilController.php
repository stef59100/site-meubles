<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Products;

class PageAccueilController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Products :: class);
        $productsList =$repo->findAll();

        return $this->render('page_accueil/index.html.twig', [
            'controller_name' => 'PageAccueilController',
            'pageTitle' => 'Un grand choix de canapés et salons adapté à votre budget',
            'intro' => 'Pour partager des moments agréables entre amis ou en famille, un canapé confortable est indispensable',
            'productsList'=> $productsList
        ]);
    }

   
}