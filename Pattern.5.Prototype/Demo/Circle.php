<?php

namespace Demo;

use Demo\Shape;

class Circle extends Shape
{
    public function __construct()
    {
        $this->type = "Circle";
    }

    public function draw()
    {
        echo "In Circle::draw() !\n";
    }
}