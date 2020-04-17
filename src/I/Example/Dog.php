<?php

namespace Solid\I\Example;


use Solid\I\Example\Contract\AnimalInterface;
use Solid\I\Example\Contract\ShowInterface;
use Solid\I\Example\Contract\WalkableInterface;

class Dog implements AnimalInterface, WalkableInterface, ShowInterface
{
    public function eat()
    {
        return "吃飼料";
    }

    public function excrete()
    {
        return "大便";
    }

    public function walk()
    {
        return "出門散步囉";
    }

    public function show()
    {
        return [$this->eat(), $this->excrete(), $this->walk()];
    }
}
