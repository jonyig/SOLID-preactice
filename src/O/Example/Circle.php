<?php

namespace Solid\O\Example;


use Solid\O\Example\Contract\ShapeInterface;

class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return  $this->radius * $this->radius * pi();
    }
}
