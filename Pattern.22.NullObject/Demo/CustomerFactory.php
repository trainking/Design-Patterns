<?php

namespace Demo;

use Demo\RealCustomer;
use Demo\NullCustomer;

class CustomerFactory
{
    public static function getCustomer(string $name)
    {
        if (in_array($name, ["Bob", "Dalao"])) {
            return new RealCustomer($name);
        }

        return new NullCustomer();
    }
}