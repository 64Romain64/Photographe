<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProjetRepository $projetRepository): Response
    {
        $articles = $projetRepository->findAll();
        return $this->render('home/index.html.twig', [
            'articles' => $articles,
        ]);
    }
    /**
     * @Route("/projet/{id}", name="projet")
     */
    public function projet(Projet $projet): Response
    {
        return $this->render('home/projet.html.twig', [
            'projet' => $projet,
        ]);
    }
}
