<?php

namespace Solid\I\Mistake;

use Solid\I\Mistake\Contract\AnimalInterface;

class Dog implements AnimalInterface
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
}
