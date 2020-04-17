<?php

namespace Solid\I\Mistake;

use Solid\I\Mistake\Contract\AnimalInterface;

class Fish implements AnimalInterface
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
        return null;
    }

    // 魚無法散步 這樣看起來就不合邏輯
}
