<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Repository\AnnonceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    /**
     * @Route("/user")
    */

class AnnonceUserController extends AbstractController
{
    /**
     * @Route("/", name="annonce_user")
    */
 
    public function index(Request $request, PaginatorInterface $paginatorInterface): Response
    {
        $annonce = new Annonce();
        $donnees = $this->getDoctrine()->getRepository(Annonce::class)->findAll();
        
         $annonce = $paginatorInterface->paginate(

            $donnees, // les données de l'annonce
            $request->query->getInt('page',1), // la page par defaut 1 et avec url page
            5 // nombre d'élement à afficher


         );

        return $this->render('annonce_user/index.html.twig', [
            'annonces' => $annonce,
        ]);
    }


    /**
     * @Route("/{id}", name="details_annonce", methods={"GET"})
     */
    public function show(Annonce $annonce): Response
    {
        return $this->render('annonce_user/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }
}
