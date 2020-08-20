<?php

namespace Demo;

use Demo\Item;
use Demo\Wrapper;

abstract class Burger implements Item
{

    abstract function name();
    abstract function price();

    // 共有属性先实现
    public function packing()
    {
        return Wrapper();
    }
}