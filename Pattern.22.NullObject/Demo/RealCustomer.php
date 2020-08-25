<?php

namespace Demo;

use Demo\AbstractCustomer;

class RealCustomer extends AbstractCustomer
{

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function isNil()
    {
        return false;
    }

    public function getName()
    {
        return $this->name;
    }
}