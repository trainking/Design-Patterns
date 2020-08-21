<?php

namespace Demo;

class Meal
{
    private $items = [];

    public function addItem($item)
    {
        array_push($this->items, $item);
    }

    public function getCost()
    {
        $cost = 0;
        foreach ($this->items as $item) {
            $cost += $item->price();
        }
        return $cost;
    }

    public function showItems()
    {
        foreach ($this->items as $item) {
            echo "Item: ".$item->name()."\n";
            echo "packing: ".$item->packing()."\n";
            echo "price: ".$item->price()."\n";
        }
    }
}