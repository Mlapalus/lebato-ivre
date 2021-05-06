<?php

namespace App\Controller\Admin;

use App\Entity\Rum;
use App\Entity\Food;
use App\Entity\Shot;
use App\Entity\Soft;
use App\Entity\Wine;
use App\Entity\Event;
use App\Entity\Photo;
use App\Entity\Alcools;
use App\Entity\Archive;
use App\Entity\Cocktail;
use App\Entity\DraftBeer;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * 
     */
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Le Bateau Ivre');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section();

        yield MenuItem::section('Nos produits');
        yield MenuItem::linkToCrud('Alcools','fa fa-glass-whiskey',Alcools::class);
        yield MenuItem::linkToCrud('Cocktails','fa fa-cocktail',Cocktail::class);
        yield MenuItem::linkToCrud('Bières Pression','fa fa-beer',DraftBeer::class);
        yield MenuItem::linkToCrud('Nourriture','fa fa-hotdog',Food::class);
        yield MenuItem::linkToCrud('Rhums Arrangés','fa fa-flask',Rum::class);
        yield MenuItem::linkToCrud('Shots','fa fa-glass',Shot::class);
        yield MenuItem::linkToCrud('Softs','fa fa-mug-hot',Soft::class);
        yield MenuItem::linkToCrud('Vins','fa fa-wine-glass-alt',Wine::class);

        yield MenuItem::section();
        yield MenuItem::linkToCrud('Archives','fa fa-home',Archive::class);
        yield MenuItem::linkToCrud('Evenements','fa fa-joint',Event::class);
        yield MenuItem::linkToCrud('Photos','fa fa-flushed',Photo::class);

        yield MenuItem::section();
        yield MenuItem::linkToUrl('Lien vers le Facebook du bar', null, 'https://www.facebook.com/lebateauivre.bar');

        //yield MenuItem::section();
        //yield MenuItem::linkToLogout('Logout', 'fa fa-exit');

        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}