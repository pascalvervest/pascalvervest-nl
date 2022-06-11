<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminBlogController extends AbstractController
{
    #[Route('/admin/blog')]
    public function index(): Response
    {
        return $this->render('admin/blog/index.html.twig');
    }
}
