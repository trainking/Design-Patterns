<?php

namespace Demo;

class Circle implements Shape
{
    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function draw()
    {
        echo "Color: ".$this->color."\n";
    }
}