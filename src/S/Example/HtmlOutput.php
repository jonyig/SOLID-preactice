<?php

namespace Solid\S\Example;


use Solid\S\Example\Contract\OutputInterface;

class HtmlOutput implements OutputInterface
{
    public function output($coupon)
    {
        return "<h1>" . $coupon . "</h1>";
    }
}
