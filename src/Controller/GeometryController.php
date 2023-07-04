<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Circle;
use App\Entity\Triangle;

class GeometryController extends AbstractController {

    /**
     * @Route("/triangle/{a}/{b}/{c}", methods={"GET"})
     */
    public function triangleAction($a, $b, $c): JsonResponse {
        $triangle = new Triangle($a, $b, $c);
        return $this->json([
            'type' => 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $triangle->calculateSurface(),
            'circumference' => $triangle->calculateDiameter(),
        ]);
    }

    /**
     * @Route("/circle/{radius}", methods={"GET"})
     */
    public function circleAction($radius): JsonResponse {
        $circle = new Circle($radius);
        return $this->json([
            'type' => 'circle',
            'radius' => $radius,
            'surface' => $circle->calculateSurface(),
            'circumference' => $circle->calculateDiameter(),
        ]);
    }
}