<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Contracts\Cache\CacheInterface;

class MenuController extends AbstractController
{
    public function index() {
        return $this->render('app/menu/menu.html.twig');
    }
}
