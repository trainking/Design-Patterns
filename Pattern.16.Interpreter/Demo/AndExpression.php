<?php

namespace Demo;

use Demo\Expression;

class AndExpression implements Expression
{
    private $expr1 = null;
    private $expr2 = null;

    public function __construct(Expression $expr1, Expression $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    public function interpret($context)
    {
        return $this->expr1->interpret($context) && $this->expr2->interpret($context);
    }
}