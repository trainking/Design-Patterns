<?php

namespace Demo;

abstract class AbstractFactory
{
    abstract function getShape($shapeType);
    abstract function getColor($colorType);
}