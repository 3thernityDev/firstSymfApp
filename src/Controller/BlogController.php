<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    // Listes des blogs
    #[Route('/blog', name: 'blog_list')]
    public function blogList()
    {
        return $this->render("blog/index.html.twig", ["message" => ["Nouvelle MAJ", "EXPERNET UN CONCOURS DE FOLIE", "BLACK FRIDAYS", "J'ARRETE YOUTUBE", "KAIZEN"]]);
    }
    // Add blogs
    #[Route(
        '/blog/add/{article}',
        name: 'blog_add',
        methods: ['POST']
    )]
    public function add(string $article)
    {
        return $this->render("hello/index.html.twig", ["message" => "Nouvelle articles: $article"]);
    }
}
