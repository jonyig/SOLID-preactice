<?php

namespace Solid\S\Example;


use Solid\S\Example\Contract\OutputInterface;

class CouponReport
{
    private $repo;

    public function __construct(CouponRepository $repo)
    {
        $this->repo = $repo;
    }

    public function output(OutputInterface $format)
    {
        $coupon = $this->repo->getByDb();

        return $format->output($coupon);
    }

}
