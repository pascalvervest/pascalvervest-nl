<?php

declare(strict_types=1);

namespace App\Controller\Public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/public/index')]
    public function index(): Response
    {
        $number = random_int(1, 10);

        return $this->render('public/home/index.html.twig', [
            'number' => $number,
        ]);
    }
}
