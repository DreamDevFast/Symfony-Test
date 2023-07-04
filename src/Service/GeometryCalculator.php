<?php

namespace App\Service;

class GeometryCalculator {
    public function sumAreas($object1, $object2): float {
        return $object1->calculateSurface() + $object2->calculateSurface();
    }

    public function sumDiameters($object1, $object2): float
    {
        return $object1->calculateDiameter() + $object2->calculateDiameter();
    }
}