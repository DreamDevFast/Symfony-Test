<?php

namespace App\Entity;

class Triangle
{
    private $a, $b, $c;

    public function __construct(float $a, float $b, float $c) 
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calculateSurface(): float 
    {
        // using Heron's formula
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function calculateDiameter(): float 
    {
        // the diameter of a triangle does not exist, let's return the circumference
        return $this->a + $this->b + $this->c;
    }
}