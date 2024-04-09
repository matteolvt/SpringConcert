<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InfosController extends AbstractController
{
    #[Route('/infos', name: 'infos')]
    public function index(): Response
    {
        return $this->render('home/Infos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
