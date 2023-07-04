<?php

namespace App\Entity;

class Circle
{
    private $radius;

    public function __construct(float $radius) 
    {
        $this->radius = $radius;
    }

    public function calculateSurface(): float 
    {
        return M_PI * pow($this->radius, 2);
    }

    public function calculateDiameter(): float 
    {
        return 2 * $this->radius;
    }
}