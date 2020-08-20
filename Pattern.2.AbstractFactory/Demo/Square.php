<?php

namespace Demo;

use Demo\Shape;

class Square implements Shape 
{
    public function draw() 
    {
        echo "In Square::draw()\n";
    }
}
