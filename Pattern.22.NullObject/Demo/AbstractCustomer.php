<?php

namespace Demo;

abstract class AbstractCustomer
{

    protected $name;

    abstract function isNil();

    abstract function getName();
}