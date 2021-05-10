<?php

namespace App\Controller;

use App\Repository\PremiumVodkaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PremiumVodkaController extends AbstractController
{
    public function index(PremiumVodkaRepository $repository): Response
    {
        $premiumVodkas = $repository->findAll();
        return $this->render('app/menu/premium_vodka.html.twig', [
            'happyhour' => false,
            'title' => "Nos Vodkas",
            'products' => $premiumVodkas,
        ]);
    }

    public function show($name): Response
    {
        return new Response("L'alcool " . $name);
    }
}
