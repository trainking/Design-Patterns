<?php

use Demo\MealBuilder;

class Application 
{
    public static function main() 
    {
        self::registe();

        $builder = new MealBuilder();
        $vegMeal = $builder->prepareVegMeal();
        echo "VegMeal:".$vegMeal->getCost()."\n";
        $vegMeal->showItems();
        $nonVegMeal = $builder->prepareNonVegMeal();
        echo "NonVegMeal:".$nonVegMeal->getCost()."\n";
        $nonVegMeal->showItems();

    }

    // 注册自动加载类的方法
    public static function registe()
    {
        spl_autoload_register("Application::loadClass");
    }

    // 自动加载
    public static function loadClass($class)
    {
        $class = str_replace('\\', '/', $class);
        $class = './'.$class.'.php';
        require_once $class;
    }
}

Application::main();