<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminindexController extends AbstractController
{
    /**
     * @Route("/adminindex", name="adminindex")
     */
    public function index()
    {
        return $this->render('adminindex/index.html.twig', [
            'controller_name' => 'AdminindexController',
        ]);
    }
}
