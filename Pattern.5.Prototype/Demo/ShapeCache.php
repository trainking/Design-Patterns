<?php

namespace Demo;

use Demo\Circle;
use Demo\Rectangle;
use Demo\Square;

class ShapeCache
{
    private static $cache = [];

    public static function getShape($shapeId)
    {
        $shape = self::$cache[$shapeId];
        return clone $shape;
    }

    public static function loadCache()
    {
        $circle = new Circle();
        $circle->setId("1");
        self::$cache[$circle->getId()] = $circle;

        $rectangle = new Rectangle();
        $rectangle->setId("2");
        self::$cache[$rectangle->getId()] = $rectangle;

        $square = new Square();
        $square->setId("3");
        self::$cache[$square->getId()] = $square;
    }
}