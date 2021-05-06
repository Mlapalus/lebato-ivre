<?php
namespace App\Controller;

use App\Repository\FoodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FoodController extends AbstractController
{
  public function show(FoodRepository $foodRepository): Response
  {
      $foods = $foodRepository->findAll();
      return $this->render('app/menu/food.html.twig', [
          'happyhour'=> false,
          'title' => "Pour manger",
          'products' => $foods,
      ]) ;  }

  public function item(): Response
  {
    return new Response();
  }
}