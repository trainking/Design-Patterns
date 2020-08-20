<?php

namespace Demo;

use Demo\Color;

class Red implements Color 
{
    public function fill() 
    {
        echo "In Red::fill()\n";
    }
}
