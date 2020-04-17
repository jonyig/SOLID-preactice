<?php

namespace Solid\O\Example;


use Solid\O\Example\Contract\ShapeInterface;

class Square implements ShapeInterface
{
    public $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->width;
    }
}
