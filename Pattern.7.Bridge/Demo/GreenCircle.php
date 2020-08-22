<?php

namespace Demo;

use Demo\DrawAPI;

class GreenCircle implements DrawAPI
{
    public function drawCircle()
    {
        echo "IN GreenCircle::drawCircle method.\n";
    }
}