<?php

namespace Demo;

use Demo\AbstractFactory;
use Demo\Blue;
use Demo\Red;
use Demo\Green;

class ColorFactory extends AbstractFactory
{
    public function getShape($shapeType)
    {
        return null;
    }

    public function getColor($colorType)
    {
        $instance = null;
        switch($colorType)
        {
            case "RED":
                $instance = new Red();
            break;
            case "GREEN":
                $instance = new Green();
            break;
            case "BLUE":
                $instance = new Blue();
            break;
            default:
                throw new \Exception("not found color.");
        }
        return $instance;
    }
}