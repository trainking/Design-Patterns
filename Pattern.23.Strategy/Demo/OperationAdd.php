<?php

namespace Demo;

use Demo\Strategy;

class OperationAdd implements Strategy
{
    public function doOperation(int $x, int $y)
    {
        return $x + $y;
    }
}