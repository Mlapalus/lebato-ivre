<?php
namespace App\Controller;

use App\Repository\WineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WineController extends AbstractController
{
  public function show(WineRepository $winerepository): Response
  {
      $wines = $winerepository->findAll();
      return $this->render('app/menu/wine.html.twig', [
          'happyhour'=> false,
          'title' => "Nos Vins",
          'products' => $wines,
      ]) ;  }

  public function item(): Response
  {
    return new Response();
  }
}