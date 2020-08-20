<?php

namespace Demo;

use Demo\Shape;

class Circle implements Shape 
{
    public function draw() 
    {
        echo "In Circle::draw()\n";
    }
}
