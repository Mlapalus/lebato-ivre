<?php

namespace App\Controller;

use App\Repository\PremiumGinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PremiumGinController extends AbstractController
{
    public function index(PremiumGinRepository $repository): Response
    {
        $premiumGins = $repository->findAll();
        return $this->render('app/menu/premium_gin.html.twig', [
            'happyhour' => false,
            'title' => "Nos Gins",
            'products' => $premiumGins,
        ]);
    }

    public function show($name): Response
    {
        return new Response("L'alcool " . $name);
    }
}
