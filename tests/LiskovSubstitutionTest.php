<?php

namespace Solid\Test;


use PHPUnit\Framework\TestCase;
use Solid\L\Common\Json;
use Solid\L\Common\JsonResource;
use Solid\L\Common\Xml;
use Solid\L\Common\XmlResource;
use Solid\L\Example\Report;
use Solid\L\Mistake\Report as Mistake;

class LiskovSubstitutionTest extends TestCase
{
    /** @test */
    public function is_can_run_mistake()
    {
        $report = new Mistake(new XmlResource(),new Xml());

        $this->assertIsArray($report->output());
    }

    /** @test */
    public function is_can_run_example()
    {
        $report = new Report(new JsonResource(),new Json());
//        $report = new Report(new XmlResource(),new Xml());

        $this->assertIsArray($report->output());
    }
}
