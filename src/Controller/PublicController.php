<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/public/index")
     */
    public function index(): Response
    {
        $number = random_int(1, 10);

        return $this->render('public/index.html.twig', [
            'number' => $number,
        ]);
    }
}
