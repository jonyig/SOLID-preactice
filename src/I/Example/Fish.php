<?php

namespace Solid\I\Example;


use Solid\I\Example\Contract\AnimalInterface;
use Solid\I\Example\Contract\ShowInterface;

class Fish implements AnimalInterface, ShowInterface
{
    public function eat()
    {
        return "吃飼料";
    }

    public function excrete()
    {
        return "大便";
    }

    public function show()
    {
        return [$this->eat(), $this->excrete()];
    }
}
