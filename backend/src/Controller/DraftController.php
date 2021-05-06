<?php
namespace App\Controller;

use App\Repository\DraftBeerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DraftController extends AbstractController
{
  public function show(DraftBeerRepository $draftrepository): Response
  {
          $drafts = $draftrepository->findAll();
          return $this->render('app/menu/draft.html.twig', [
              'happyhour' => true,
              'title' => "Nos Bières Pression",
              'products' => $drafts,
          ]) ;
  }

  public function item(): Response
  {
    return new Response();
  }
}