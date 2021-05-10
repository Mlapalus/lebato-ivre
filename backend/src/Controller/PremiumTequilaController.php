<?php

namespace App\Controller;

use App\Repository\PremiumTequilaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PremiumTequilaController extends AbstractController
{
    public function index(PremiumTequilaRepository $repository): Response
    {
        $premiumTequilas = $repository->findAll();
        return $this->render('app/menu/premium_tequila.html.twig', [
            'happyhour' => false,
            'title' => "Nos Tequilas",
            'products' => $premiumTequilas,
        ]);
    }

    public function show($name): Response
    {
        return new Response("L'alcool " . $name);
    }
}
