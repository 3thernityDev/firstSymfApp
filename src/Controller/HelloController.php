<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    // First routes
    #[Route('/hello', name: 'app_hello')]
    public function bidule()
    {
        return $this->render("hello/index.html.twig", ["message" => "The end is near ⚠️"]);
    }

    // Second routes
    #[Route('/mom', name: 'app_mom')]
    public function mom()
    {
        return $this->render("hello/index.html.twig", ["message" => "Do you know where my mom is ? I think I lost her ... 😭"]);
    }
    // Function avec variables

    #[Route(
        '/var/{jeux}',
        name: 'app_var',
        methods: ['POST']
    )]
    public function show(string $jeux)
    {
        return $this->render("hello/index.html.twig", ["message" => "Jeux: $jeux"]);
    }
}
