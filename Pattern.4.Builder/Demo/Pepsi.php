<?php

namespace Demo;

use Demo\ColdDrink;

class Pepsi extends ColdDrink
{
    public function name() 
    {
        return "Pepsi";
    }

    public function price() 
    {
        return 3;
    }
}