<?php

namespace Solid\L\Common;


use Solid\L\Common\Contract\DataInterface;

abstract class DataResource
{
    public function getData(DataInterface $type)
    {
        return $this->parse($type->data());
    }

    abstract public function parse($content);
}
