<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="your_homepage_route")
     */
    public function index(): Response
    {
        return $this->redirect('http://localhost:4200/');
    }
    /**
     * @Route("/angular", name="app_angular")
     */
    public function angular(): Response
    {
        return $this->redirect('http://localhost:4200/');
    }
}
