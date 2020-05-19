<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
{
    /**
     * @Route("/property", name="property.index")
     */
    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'activated' => true
        ]);
    }
}