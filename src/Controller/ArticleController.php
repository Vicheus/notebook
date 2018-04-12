<?php
declare(strict_types=1);

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage(): Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/news/{slug}")
     * @param string $slug
     * @return Response
     */
    public function show(string $slug): Response
    {
        $comments = [
            'I ate normal rock once. It did NOT taste like bacon.',
            'I ate normal rock once. It did NOT taste like bacon.',
            'I ate normal rock once. It did NOT taste like bacon.',
        ];

        return $this->render('article/show.html.twig', [
            'title'    => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}
