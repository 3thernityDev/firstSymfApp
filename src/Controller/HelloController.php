<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function bidule()
    {
        return $this->render("hello/index.html.twig", ["message" => "The end is near ⚠️"]);
    }

    #[Route('/mom', name: 'app_hello')]
    public function mom()
    {
        return $this->render("hello/index.html.twig", ["message" => "Do you know where my mom is ? I think I lose her ... 😭"]);
    }
}
