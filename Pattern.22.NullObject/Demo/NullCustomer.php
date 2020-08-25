<?php

namespace Demo;

use Demo\AbstractCustomer;

class NullCustomer extends AbstractCustomer
{

    public function isNil()
    {
        return true;
    }

    public function getName()
    {
        return "No Active!";
    }
}