<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
  public function contact(): Response
  {
    return $this->render('app/contact.html.twig') ;
  }

}