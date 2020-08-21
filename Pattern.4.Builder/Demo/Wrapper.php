<?php

namespace Demo;

use Demo\Packing;

class Wrapper implements Packing
{
    public function name()
    {
        return "Wrapper Packing.";
    }
}
