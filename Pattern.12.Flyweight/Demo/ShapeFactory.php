<?php

namespace Demo;

use Demo\Circle;

class ShapeFactory
{
    private $cricleMap = [];

    public function getCricle($color)
    {
        if (isset($this->cricleMap[$color])) {
            return $this->cricleMap[$color];
        } else {
            $circle = new Circle($color);
            $this->cricleMap[$color]= $circle;
            return $circle;
        }
    }
}