<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        return new Response(
            '<html><body>Hello from Symfony</body></html>'
        );
    }

    #[Route('/test/{numberOne}/{numberTwo}', name: 'test_main')]
    public function number(int $numberOne,int $numberTwo): Response
    {
        $result = $numberOne*$numberTwo;

        return new Response(
            '<html><body>Multiply: '.$numberOne.' on '.$numberTwo.' equal: '.$result.'</body></html>'
        );
    }
}
