<?php

namespace Demo;

abstract class Shape
{
    private $Id;

    private $type;

    abstract function draw();

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->Id = $type;
    }

    // PHP 用魔术方法定义克隆，等同于其实每个对象都是可以被克隆的
    // 不想被克隆使用私有化__colone()
    //  function __colone();
}