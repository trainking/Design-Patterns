<?php

namespace Demo;

use Demo\DrawAPI;

class RedCircle implements DrawAPI
{
    public function drawCircle()
    {
        echo "IN RedCircle::drawCircle method.\n";
    }
}