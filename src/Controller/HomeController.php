<?php

namespace App\Controller;

use App\HttpClient\JokeHttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(JokeHttpClient $httpClient): Response
    {   
        
        $joke = $httpClient->getRandomJoke();
        
        return $this->render('home/index.html.twig', [
            'joke' => $joke,
        ]);
    }
}
