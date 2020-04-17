<?php

namespace Solid\L\Mistake;


use Solid\L\Common\Json;
use Solid\L\Common\JsonResource;
use Solid\L\Common\Xml;
use Solid\L\Common\XmlResource;

class Report
{
    protected $resource;
    protected $dataRepo;

    public function __construct(XmlResource $resource, Xml $dataRepo)
    {
        $this->resource = $resource;
        $this->dataRepo = $dataRepo;
    }

    public function output()
    {
        $data = $this->resource->getData($this->dataRepo);

        return $data;
    }

    //如果我又新增了json呢？
}
