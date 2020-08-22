<?php

namespace Demo;

use Demo\DrawAPI;

abstract class Shape
{
    protected $drawAPI;

    public function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    abstract function draw();
}