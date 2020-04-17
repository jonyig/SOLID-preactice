<?php

namespace Solid\L\Common;


class XmlResource extends DataResource
{
    public function parse($content)
    {
        $data = json_decode(json_encode(simplexml_load_string($content)),true);

        return $data;
    }
}
