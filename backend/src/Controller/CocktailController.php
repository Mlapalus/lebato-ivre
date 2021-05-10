<?php
namespace App\Controller;

use App\Repository\CocktailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CocktailController extends AbstractController
{
    public function index(CocktailRepository $cocktailrepository): Response
    {
        $cocktails = $cocktailrepository->findAll();
        return $this->render('app/menu/cocktail.html.twig', [
            'happyhour'=> true,
            'title' => "Nos Cocktails",
            'products' => $cocktails,
        ]) ;
    }

  public function show(): Response
  {
    return new Response();
  }
}