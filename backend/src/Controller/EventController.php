<?php
namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class EventController extends AbstractController
{
  public function index(EventRepository $repository): Response
  {
    $events = $repository->findAll();
    return $this->render('app/event.html.twig', [
      'events' => $events
    ]) ;
  }

  public function show(): Response
  {
    return new Response();
  }
}
