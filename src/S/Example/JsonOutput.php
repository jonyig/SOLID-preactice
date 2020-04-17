<?php

namespace Solid\S\Example;


use Solid\S\Example\Contract\OutputInterface;

class JsonOutput implements OutputInterface
{
    public function output($coupon)
    {
        return json_encode($coupon);
    }
}
