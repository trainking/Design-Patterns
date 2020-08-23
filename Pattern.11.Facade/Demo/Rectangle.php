<?php

namespace Demo;

use Demo\Shape;

class Rectangle implements Shape
{
    public function draw()
    {
        echo "In Rectangle::draw()\n";
    }
}