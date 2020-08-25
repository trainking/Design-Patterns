<?php

namespace Demo;

use Demo\Strategy;

class OperationMul implements Strategy
{
    public function doOperation(int $x, int $y)
    {
        return $x * $y;
    }
}