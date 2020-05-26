<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Annonce;

    /**
     * @Route("/user")
    */

class AnnonceUserController extends AbstractController
{
    /**
     * @Route("/", name="annonce_user")
    */

    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('annonce_user/index.html.twig', [
            'annonces' => $annonceRepository->findAll(),
        ]);
    }
}
