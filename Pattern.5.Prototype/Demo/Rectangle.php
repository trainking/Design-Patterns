<?php

namespace Demo;

use Demo\Shape;

class Rectangle extends Shape
{
    public function __construct()
    {
        $this->type = "Rectangle";
    }

    public function draw()
    {
        echo "In Rectangle::draw() !\n";
    }
}