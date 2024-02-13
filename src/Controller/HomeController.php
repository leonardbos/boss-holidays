<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(MessageGenerator $messageGenerator): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'message' => $messageGenerator->getHappyMessage()
        ]);
    }
}
