<?php
namespace App\Controller;

use App\Repository\ShotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ShotController extends AbstractController
{
  public function index(ShotRepository $shotRepository): Response
  {
      $shots = $shotRepository->findAll();
      return $this->render('app/menu/shot.html.twig', [
          'happyhour' => false,
          'title' => "Nos shots",
          'products' => $shots,
      ]) ;  }

  public function show(): Response
  {
    return new Response();
  }
}
