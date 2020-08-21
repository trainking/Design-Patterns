<?php

namespace Demo;

use Demo\Shape;

class Square extends Shape
{
    public function __construct()
    {
        $this->type = "Square";
    }

    public function draw()
    {
        echo "In Square::draw() !\n";
    }

}