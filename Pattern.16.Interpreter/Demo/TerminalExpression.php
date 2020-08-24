<?php

namespace Demo;

use Demo\Expression;

class TerminalExpression implements Expression
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function interpret($context)
    {
        return strpos($context, $this->data) !== false;
    }
}