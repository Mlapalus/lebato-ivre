<?php
namespace App\Controller;

use App\Repository\DraftBeerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DraftController extends AbstractController
{
  public function index(DraftBeerRepository $draftrepository): Response
  {
          $drafts = $draftrepository->findAll();
          return $this->render('app/menu/draft.html.twig', [
              'happyhour' => true,
              'title' => "Nos Bières Pression",
              'products' => $drafts,
          ]) ;
  }

  public function show(): Response
  {
    return new Response();
  }
}