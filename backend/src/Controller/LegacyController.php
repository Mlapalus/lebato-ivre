<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LegacyController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('app/legacy.html.twig') ;
  }

}