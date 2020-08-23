<?php

namespace Demo;

class Employee
{
    private $name;
    private $age;
    private $sexual;

    private $subordintes;

    public function __construct($name, $age, $sexual)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sexual = $sexual;
        $this->subordintes = [];
    }

    public function add(Employee $emp)
    {
        $_hash = spl_object_hash($emp);
        $this->subordintes[$_hash] = $emp;
    }

    public function remove(Employee $emp)
    {
        $_hash = spl_object_hash($emp);
        unset($this->subordintes[$_hash]);
    }

    public function __toString()
    {
        $_s = "Unknown";
        if ($this->sexual == 1 ) {
            $_s = "man";
        } elseif($this->sexual == 2) {
            $_s = "woman";
        }
        return sprintf("{name: %s, sexual: %s, age: %d, subordintes: %d}\n", $this->name, $_s, $this->age, count($this->subordintes));
    }
}