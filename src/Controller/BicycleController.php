<?php

namespace App\Controller;

use App\Entity\Bicycle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BicycleController extends AbstractController
{
    public function index(): Response
    {
        $bicycle = new Bicycle('BrandX', 'Blue');
        $bicycle->addWorkingPart('Wheel');
        $bicycle->addWorkingPart('Pedals');

        return $this->render('bicycle/index.html.twig', [
            'bicycle' => $bicycle,
        ]);
    }
}
