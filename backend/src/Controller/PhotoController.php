<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PhotoController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('app/photo.html.twig') ;
  }

  public function item(): Response
  {
    return new Response();
  }
}