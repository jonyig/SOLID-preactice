<?php

namespace Solid\L\Common;


class JsonResource extends DataResource
{
    public function parse($content)
    {
        return json_decode($content,true);
    }
}
