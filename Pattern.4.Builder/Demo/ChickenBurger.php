<?php

namespace Demo;

use Demo\Burger;

class ChickenBurger extends Burger
{
    public function name() 
    {
        return "ChickenBurger";
    }

    public function price() 
    {
        return 3.5;
    }
}