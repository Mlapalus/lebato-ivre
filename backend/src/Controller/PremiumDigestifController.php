<?php

namespace App\Controller;

use App\Repository\PremiumDigestifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PremiumDigestifController extends AbstractController
{
    public function index(PremiumDigestifRepository $repository): Response
    {
        $premiumDigestifs = $repository->findAll();
        return $this->render('app/menu/premium_digestif.html.twig', [
            'happyhour' => false,
            'title' => "Nos Digestifs",
            'products' => $premiumDigestifs,
        ]);
    }

    public function show($name): Response
    {
        return new Response("L'alcool " . $name);
    }
}
