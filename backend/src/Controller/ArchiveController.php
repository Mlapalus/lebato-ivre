<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArchiveController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('app/archive.html.twig') ;
  }

  public function item($name): Response
  {
    return new Response("L'archive ". $name );
  }
}