<?php

namespace Solid\L\Common;


use Solid\L\Common\Contract\DataInterface;

class Json implements DataInterface
{

    public function data()
    {
        return json_encode([1 => '2']);
    }
}
