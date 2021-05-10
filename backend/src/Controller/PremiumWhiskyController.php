<?php

namespace App\Controller;

use App\Repository\PremiumWhiskyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PremiumWhiskyController extends AbstractController
{
    public function index(PremiumWhiskyRepository $repository): Response
    {
        $premiumWhiskys = $repository->findAll();
        return $this->render('app/menu/premium_whisky.html.twig', [
            'happyhour' => false,
            'title' => "Nos Whiskys",
            'products' => $premiumWhiskys,
        ]);
    }

    public function show($name): Response
    {
        return new Response("L'alcool " . $name);
    }
}
