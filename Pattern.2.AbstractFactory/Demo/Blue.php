<?php

namespace Demo;

use Demo\Color;

class Blue implements Color 
{
    public function fill() 
    {
        echo "In Blue::fill()\n";
    }
}
