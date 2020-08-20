<?php

namespace Demo;

use Demo\Color;

class Green implements Color 
{
    public function fill() 
    {
        echo "In Green::fill()\n";
    }
}
