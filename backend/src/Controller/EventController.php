<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class EventController extends AbstractController
{
  public function index(): Response
  {
    return $this->render('app/event.html.twig') ;
  }

  public function show(): Response
  {
    return new Response();
  }
}
