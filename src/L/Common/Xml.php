<?php
/**
 * Created by PhpStorm.
 * User: jonny
 * Date: 2020-04-17
 * Time: 15:34
 */

namespace Solid\L\Common;


use Solid\L\Common\Contract\DataInterface;

class Xml implements DataInterface
{
    public function data()
    {
        return <<<XML
<?xml version="1.0" encoding="big5" ?> 
<entry>
     <name>Jonny</name>
     <comments>RD</comments>
</entry>
XML;

    }
}
