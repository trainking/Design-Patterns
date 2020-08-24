<?php

namespace Demo;

use Demo\Observer;

/**
 * 被观察者
 */
class Subject
{
    private $state;
    private $observers = [];

    public function setState(int $state)
    {
        $this->state = $state;
        $this->notfiyAllObserver();
    }

    public function getState()
    {
        return $this->state;
    }

    // 加入观察者
    public function attch(Observer $ob)
    {
        array_push($this->observers, $ob);
    }

    private function notfiyAllObserver()
    {
        // 这里可以改异步
        foreach($this->observers as $ob)
        {
            $ob->update();
        }
    }
}