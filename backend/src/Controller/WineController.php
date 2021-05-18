<?php
namespace App\Controller;

use App\Repository\RedWineRepository;
use App\Repository\RoseWineRepository;
use App\Repository\WhiteWineRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WineController extends AbstractController
{
  public function index(
    RedWineRepository $redWineRepository,
    RoseWineRepository $roseWineRepository,
    WhiteWineRepository $whiteWineRepository
    ): Response {
      $whiteWines = $whiteWineRepository->findAll();
      $redWines = $redWineRepository->findAll();
      $roseWines = $roseWineRepository->findAll();

      return $this->render('app/menu/wine.html.twig', [
          'happyhour'=> false,
          'title' => "Nos Vins",
          'whiteWines' => $whiteWines,
          'redWines' => $redWines,
          'roseWines' => $roseWines
      ]);  
    }

  public function show(): Response
  {
    return new Response();
  }
}
