<?php

namespace Demo;

use Demo\Shape;

abstract class ShapeDecorator implements Shape
{
    protected $shape;

    public function __construct($shape)
    {
        $this->shape = $shape;
    }

    abstract function draw();
}