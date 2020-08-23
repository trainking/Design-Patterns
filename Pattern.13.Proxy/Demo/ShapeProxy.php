<?php

namespace Demo;

use Demo\Shape;

class ShapeProxy implements Shape
{
    private $shape;

    public function __construct($shapeS)
    {
        // 用serialize代替编码解码
        $this->shape = unserialize($shapeS);
    }

    public function draw()
    {
        $this->shape->draw();
    }

}
