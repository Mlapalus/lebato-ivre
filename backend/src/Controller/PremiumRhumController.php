<?php

namespace App\Controller;

use App\Repository\PremiumRhumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PremiumRhumController extends AbstractController
{
    public function index(PremiumRhumRepository $repository): Response
    {
        $premiumRhums = $repository->findAll();
        return $this->render('app/menu/premium_rhum.html.twig', [
            'happyhour' => false,
            'title' => "Nos Rhums",
            'products' => $premiumRhums,
        ]);
    }

    public function show($name): Response
    {
        return new Response("L'alcool " . $name);
    }
}
