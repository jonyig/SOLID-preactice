<?php
/**
 * Created by PhpStorm.
 * User: jonny
 * Date: 2020-04-17
 * Time: 17:45
 */

namespace Solid\D\Common;


use Solid\D\Common\Contract\DBConnectionInterface;

class MongoDBConnection implements DBConnectionInterface
{

    public function connect()
    {
        return "連線 MongoDB 成功";
    }
}
