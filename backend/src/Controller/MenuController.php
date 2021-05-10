<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{
    public function index() {
        return $this->render('app/menu/menu.html.twig');
    }
}
