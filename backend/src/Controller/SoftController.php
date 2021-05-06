<?php
namespace App\Controller;

use App\Repository\SoftRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SoftController extends AbstractController
{
  public function show(SoftRepository $softRepository): Response
  {
      $softs = $softRepository->findAll();
      return $this->render('app/menu/soft.html.twig', [
          'happyhour' => false,
          'title' => "Nos boissons sans alcool",
          'products' => $softs,
      ]) ;  }

  public function item(): Response
  {
    return new Response();
  }
}