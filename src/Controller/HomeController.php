<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findlatest();
        return $this->render('home/index.html.twig', [
            'produits' => $produits,
            'controller_name' => 'HomeController',
        ]);
    }
}
