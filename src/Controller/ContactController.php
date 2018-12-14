<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CmsPages;
use App\Repository\CmsPagesRepository;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(CmsPagesRepository $repo)
    {        
        $pageContent = $repo->findOneBy(['CmsCategory'=>'contact']);
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'content' => $pageContent
        ]);
    }
}
