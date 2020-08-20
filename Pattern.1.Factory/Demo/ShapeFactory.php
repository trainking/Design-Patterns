<?php

namespace Demo;

use Demo\Circle;
use Demo\Square;
use Demo\Rectangle;

class ShapeFactory
{
    public function getShape($shapeType)
    {
        $instance = null;
        switch($shapeType)
        {
            case "CIRCLE":
                $instance = new Circle();
            break;
            case "SQUARE":
                $instance = new Square();
            break;
            case "RECTANGLE":
                $instance = new Rectangle();
            break;
            default:
                throw new \Exception("not found shape.");
        }
        return $instance;
    }
}