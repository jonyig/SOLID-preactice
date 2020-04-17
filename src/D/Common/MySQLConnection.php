<?php

namespace Solid\D\Common;


use Solid\D\Common\Contract\DBConnectionInterface;

class MySQLConnection implements DBConnectionInterface
{

    public function connect()
    {
        return "連線 MySQL 成功";
    }
}
