<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AlcoolController extends AbstractController
{
  public function index(): Response
  {
    return $this->render('app/menu/alcool.html.twig') ;
  }
}
