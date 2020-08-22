<?php

namespace Demo;

use Demo\Shape;
use Demo\DrawAPI;

class Circle extends Shape
{

    private $x;
    private $y;

    public function __construct(int $x, int $y, DrawAPI $drawAPI)
    {
        $this->x = $x;
        $this->y = $y;
        parent::__construct($drawAPI);
    }

    public function draw()
    {
        echo "draw x: ".$this->x."y:".$this->y."\n";
        $this->drawAPI->drawCircle();
    }
}