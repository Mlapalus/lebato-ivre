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
use App\Entity\PremiumDigestif;
use App\Entity\PremiumGin;
use App\Entity\PremiumRhum;
use App\Entity\PremiumTequila;
use App\Entity\PremiumVodka;
use App\Entity\PremiumWhisky;
use App\Entity\User;
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
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-user', User::class);
        yield MenuItem::section();

        yield MenuItem::section('Nos produits')
            ->setPermission('ROLE_ADMIN');
        
        yield MenuItem::subMenu('Nos Alcools')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Nos Rhums', 'fa fa-glass-whiskey', PremiumRhum::class)
                ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Nos Whiskys', 'fa fa-glass-whiskey', PremiumWhisky::class)
                ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Nos Gins', 'fa fa-glass-whiskey', PremiumGin::class)
                ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Nos Digestifs', 'fa fa-glass-whiskey', PremiumDigestif::class)
                ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Nos Vodka', 'fa fa-glass-whiskey', PremiumVodka::class)
                ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Nos Tequilas', 'fa fa-glass-whiskey', PremiumTequila::class)
                ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Cocktails')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Liste de nos Cocktails','fa fa-cocktail',Cocktail::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Bières Pressions')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Liste de nos Bières Pression','fa fa-beer',DraftBeer::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Rhums arrangés')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Liste de nos Rhums Arrangés', 'fa fa-flask', Rum::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Plats ')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Liste de nos plats','fa fa-hotdog',Food::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Shots')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('La liste de nos Shots','fa fa-glass',Shot::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Boissons sans alcools')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Liste des Softs','fa fa-mug-hot',Soft::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::subMenu('Nos Vins')
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Liste de nos Vins','fa fa-wine-glass-alt',Wine::class)
            ->setPermission('ROLE_ADMIN');

        yield MenuItem::section('Gestion des évenements');
        yield MenuItem::linkToCrud('Nos Archives','fa fa-home',Archive::class);
        yield MenuItem::linkToCrud('Les Evenements à venir','fa fa-joint',Event::class);
        yield MenuItem::linkToCrud('Les Photos du Bar','fa fa-flushed',Photo::class);

        yield MenuItem::section();
        yield MenuItem::linkToUrl('Lien vers le Facebook du bar', null, 'https://www.facebook.com/lebateauivre.bar');

        //yield MenuItem::section();
        //yield MenuItem::linkToLogout('Logout', 'fa fa-exit');

        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}