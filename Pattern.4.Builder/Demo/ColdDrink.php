<?php

namespace Demo;

use Demo\Item;
use Demo\Bottle;

abstract class ColdDrink implements Item
{

    abstract function name();
    abstract function price();

    // 共有属性先实现
    public function packing()
    {
        return (new Bottle())->name();
    }
}