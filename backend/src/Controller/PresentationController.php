<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PresentationController extends AbstractController
{
  public function index(): Response
  {
    return $this->render('app/presentation.html.twig') ;
  }
}
