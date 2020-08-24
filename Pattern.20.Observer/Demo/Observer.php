<?php

namespace Demo;

/**
 * 观察者
 */
abstract class Observer
{
    protected $subject;

    public function __construct($subject)
    {
        $this->subject = $subject;
        // 把观察者加入到被观察的队列
        $this->subject->attch($this);
    }

    abstract function update();
}
