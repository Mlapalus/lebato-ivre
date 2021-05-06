<?php
namespace App\Controller;

use App\Repository\CocktailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CocktailController extends AbstractController
{
    public function show(CocktailRepository $cocktailrepository): Response
    {
        $cocktails = $cocktailrepository->findAll();
        return $this->render('app/menu/cocktail.html.twig', [
            'happyhour'=> true,
            'title' => "Nos Cocktails",
            'products' => $cocktails,
        ]) ;
    }

  public function item(): Response
  {
    return new Response();
  }
}