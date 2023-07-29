<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/delete-me', name: 'delete_me_route', methods: ['GET'])]
    public function test(): Response
    {
        return $this->render('delete-me.html.twig', [
            'test' => 'test'
        ]);
    }
}
