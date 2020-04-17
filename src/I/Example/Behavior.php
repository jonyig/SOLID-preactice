<?php

namespace Solid\I\Example;


use Solid\I\Example\Contract\ShowInterface;

class Behavior
{
    public function show(ShowInterface $show)
    {
        return $show->show();
    }
}
