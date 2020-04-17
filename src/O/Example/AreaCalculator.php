<?php

namespace Solid\O\Example;

class AreaCalculator
{
    public function calculate(array $shapes)
    {
        $area = [];
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return $area;
    }
}
