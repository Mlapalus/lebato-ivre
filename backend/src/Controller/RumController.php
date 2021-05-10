<?php
namespace App\Controller;

use App\Repository\RumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RumController extends AbstractController
{
  public function index(RumRepository $rumRepository): Response
  {
      $rums = $rumRepository->findAll();
      return $this->render('app/menu/rum.html.twig', [
          'happyhour'=> false,
          'title' => "Nos Rhums arrangés",
          'products' => $rums,
      ]) ;  }

  public function show(): Response
  {
    return new Response();
  }
}
