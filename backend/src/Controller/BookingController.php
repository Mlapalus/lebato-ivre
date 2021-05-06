<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('app/booking.html.twig') ;
  }

}