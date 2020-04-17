<?php

namespace Solid\Test;


use PHPUnit\Framework\TestCase;
use Solid\I\Example\Behavior;
use Solid\I\Example\Dog;
use Solid\I\Example\Fish;
use Solid\I\Mistake\Behavior as Mistake;
use Solid\I\Mistake\Dog as MistakeDog;
use Solid\I\Mistake\Fish as MistakeFish;

class InterfaceSegregationTest extends TestCase
{
    /** @test */
    public function is_can_run_mistake()
    {
        $animal = new Mistake();

        $this->assertIsArray($animal->show(new MistakeFish()));
    }

    /** @test */
    public function is_can_run_example()
    {
        $animal = new Behavior();

        $this->assertIsArray($animal->show(new Dog()));
    }
}
