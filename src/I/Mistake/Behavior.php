<?php

namespace Solid\I\Mistake;


use Solid\I\Mistake\Contract\AnimalInterface;

class Behavior
{
    public function show(AnimalInterface $animal)
    {
        $array = [$animal->eat(), $animal->excrete()];

        if ($animal instanceof Fish) {
            return $array;
        }

        //這邊也違反開閉原則了

        return array_merge($array, [$animal->walk()]);
    }
}
