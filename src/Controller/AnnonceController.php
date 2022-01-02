<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/annonce")
 */
class AnnonceController extends AbstractController
{
    /**
     * @Route("/", name="annonce_index", methods={"GET"})
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'ProduitController', 'current_menu' => 'produit',
            'produits' => $produitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="annonce_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit->setWazDateAjout(new \DateTime);
            $produit->setWazDateModif(new \DateTime);
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('annonce_index', ['controller_name' => 'ProduitController', 'current_menu' => 'produit',], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('annonce/new.html.twig', [
            'controller_name' => 'ProduitController', 'current_menu' => 'produit',
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="annonce_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('annonce/show.html.twig', [
            'controller_name' => 'ProduitController', 'current_menu' => 'produit',
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="annonce_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('annonce_index', ['controller_name' => 'ProduitController', 'current_menu' => 'produit',], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('annonce/edit.html.twig', [
            'controller_name' => 'ProduitController', 'current_menu' => 'produit',
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="annonce_delete", methods={"POST"})
     */
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('annonce_index', ['controller_name' => 'ProduitController', 'current_menu' => 'produit',], Response::HTTP_SEE_OTHER);
    }
}
