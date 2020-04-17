<?php

namespace Solid\Test;

use PHPUnit\Framework\TestCase;
use Solid\S\Example\CouponReport;
use Solid\S\Mistake\CouponReport as Mistake;
use Solid\S\Example\CouponRepository;
use Solid\S\Example\JsonOutput;

class SingleResponsibilityTest extends TestCase
{
    /** @test */
    public function is_can_run_mistake()
    {
        $coupon = new Mistake();

        $this->assertJson($coupon->output());

    }

    /** @test */
    public function is_can_run_example()
    {
        $coupon = new CouponReport(new CouponRepository);

        $this->assertJson($coupon->output(new JsonOutput()));
    }
}
