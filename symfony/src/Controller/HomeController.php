<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // In the future, we will fetch job categories from the database here
        // For now, we just render the template.
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}