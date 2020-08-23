<?php

namespace Demo;

use Demo\ShapeDecorator;

class RedShapeDecorator extends ShapeDecorator
{

    public function __construct($shape)
    {
        parent::__construct($shape);
    }

    public function draw()
    {
        echo "执行之前，加入代码\n";
        $this->shape->draw();
        echo "执行之后，加入代码\n";
    }
}