<?php

namespace Solid\O\Mistake;


class AreaCalculator
{

    public function calculate(array $shapes)
    {
        $area = [];
        foreach ($shapes as $shape) {
            if ($shape instanceof Square) {
                $area[] = $shape->width * $shape->width;
            } elseif ($shape instanceof Circle) {
                $area[] = $shape->radius * $shape->radius * pi();
            }
        }

        return $area;
    }

    //如果需要新增三角形就需要更改這個類別

}
