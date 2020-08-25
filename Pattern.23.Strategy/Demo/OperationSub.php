<?php

namespace Demo;

use Demo\Strategy;

class OperationSub implements Strategy
{
    public function doOperation(int $x, int $y)
    {
        return $x - $y;
    }
}