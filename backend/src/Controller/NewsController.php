<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('app/news.html.twig') ;
  }

  public function item(): Response
  {
    return new Response();
  }
}