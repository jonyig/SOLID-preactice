<?php

namespace Solid\L\Example;


use Solid\L\Common\Contract\DataInterface;
use Solid\L\Common\DataResource;

class Report
{
    protected $resource;
    protected $dataRepo;

    public function __construct(DataResource $resource, DataInterface $dataRepo)
    {
        $this->resource = $resource;
        $this->dataRepo = $dataRepo;
    }

    public function output()
    {
        $data = $this->resource->getData($this->dataRepo);

        return $data;
    }
}
