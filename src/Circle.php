<?php

namespace Tes;

use Tes\Shape;

class Circle extends Shape
{
    private $radius=28;

    public function getArea()
    {
        return $this->radius/2;
    }
}