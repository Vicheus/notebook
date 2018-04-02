<?php
declare(strict_types=1);

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage(): Response
    {
        return new Response('OMG! My first page already! Woohoo');
    }

    /**
     * @Route("/news/{slug}")
     * @param string $slug
     * @return Response
     */
    public function show(string $slug): Response
    {
        return new Response(sprintf(
            'Future page to show one space article: %s!',
            $slug
        ));
    }
}
