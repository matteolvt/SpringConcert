<?php

namespace App\Controller\Admin;

use App\Controller\ArtisteController;
use App\Entity\Artistes;
use App\Entity\Musiques;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ArtistesCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SpringConcert');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Artistes', 'fas fa-microphone', Artistes::class);
        yield MenuItem::linkToCrud('Musiques', 'fas fa-music', Musiques::class);
    }
}
