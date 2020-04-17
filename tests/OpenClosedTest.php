<?php

namespace Solid\Test;


use PHPUnit\Framework\TestCase;

use Solid\O\Example\AreaCalculator;
use Solid\O\Example\Circle;
use Solid\O\Example\Square;
use Solid\O\Example\Triangle;
use Solid\O\Mistake\AreaCalculator as Mistake;
use Solid\O\Mistake\Circle as mistakeCircle;
use Solid\O\Mistake\Square as mistakeSquare;

class OpenClosedTest extends TestCase
{
    /** @test */
    public function is_can_run_mistake()
    {
        $cal = new Mistake();

        $this->assertIsArray($cal->calculate([
            new mistakeCircle(1),
            new mistakeCircle(4),
            new mistakeSquare(6),
        ]));
    }

    /** @test */
    public function is_can_run_example()
    {
        $cal = new AreaCalculator();

        $this->assertIsArray($cal->calculate([
            new Circle(1),
            new Circle(4),
            new Square(6),
            new Triangle(4,8),
        ]));
    }
}
