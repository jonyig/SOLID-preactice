<?php

namespace Solid\S\Mistake;

class CouponReport
{
    public function output()
    {
        $coupon = $this->getByDb();

        return $this->format($coupon);
    }

    public function getByDb()
    {
        return ['1' => "ffjfkjfkjs"];
    }

    public function format($coupon)
    {
        return json_encode($coupon);

    }
}


