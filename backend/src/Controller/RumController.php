<?php
namespace App\Controller;

use App\Repository\RumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RumController extends AbstractController
{
  public function show(RumRepository $rumRepository): Response
  {
      $rums = $rumRepository->findAll();
      return $this->render('app/menu/rum.html.twig', [
          'happyhour'=> false,
          'title' => "Nos Rhums arrangés",
          'products' => $rums,
      ]) ;  }

  public function item(): Response
  {
    return new Response();
  }
}