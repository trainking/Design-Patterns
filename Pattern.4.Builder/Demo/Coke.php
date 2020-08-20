<?php

namespace Demo;

use Demo\ColdDrink;

class Coke extends ColdDrink
{
    public function name() 
    {
        return "Coke";
    }

    public function price() 
    {
        return 3;
    }
}