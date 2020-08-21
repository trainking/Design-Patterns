<?php

namespace Demo;

use Demo\Packing;

class Bottle implements Packing
{
    public function name()
    {
        return "Bottle Packing.";
    }
}
