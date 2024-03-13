<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArtisteController extends AbstractController
{
    #[Route('/artistes', name: 'artistes')]
    public function index(): Response
    {
        return $this->render('home/Artistes.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}