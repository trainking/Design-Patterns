<?php

namespace Demo;

use Demo\Burger;

class VegBurger extends Burger
{
    public function name() 
    {
        return "vegBurger";
    }

    public function price() 
    {
        return 2.5;
    }
}