<?php

namespace Solid\O\Example;


use Solid\O\Example\Contract\ShapeInterface;

class Triangle implements ShapeInterface
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height / 2;
    }
}
