<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Products;
use App\Repository\ProductsRepository;


class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index(ProductsRepository $repo)   
    {
        $productsList =$repo->findAll();
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
            'category_name' => 'Canapés',
            'store_name' => 'Bi-canapés, salons fauteuils , ameublement Lille ',
            'productsList'=> $productsList
        ]);
    }
     /**
     * @Route("catalog/show/product/{id}", name="show_product")
     */
    public function show(Products $product)
    {
             return $this->render('show_product/index.html.twig', [
            'item'=> $product,
            'store_name' => 'Bi-canapés, salons fauteuils , ameublement Lille '
        ]);
    }
}

