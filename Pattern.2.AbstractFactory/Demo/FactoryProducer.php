<?php

namespace Demo;

use Demo\ShapeFactory;
use Demo\ColorFactory;

class FactoryProducer
{
    public static function getFactory($factoryName)
    {
        if ($factoryName == "SHAPE") {
            return new ShapeFactory();
        } elseif( $factoryName == "COLOR"){
            return new ColorFactory();
        } else {
            throw new \Exception("not found factory.");
        }
    }
}