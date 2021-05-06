<?php
namespace App\Controller;

use App\Repository\AlcoolsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AlcoolController extends AbstractController
{
  public function show(AlcoolsRepository $alcoolrepository): Response
  {
    $alcools = $alcoolrepository->findAll();
    return $this->render('app/menu/alcool.html.twig', [
        'happyhour' => false,
        'title' => "Nos alcools",
        'products' => $alcools,
    ]) ;
  }

  public function item($name): Response
  {
    return new Response("L'alcool ". $name);
  }
}