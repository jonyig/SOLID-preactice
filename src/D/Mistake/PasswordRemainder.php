<?php

namespace Solid\D\Mistake;


use Solid\D\Common\MySQLConnection;

class PasswordRemainder
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    //如果新增了MangoDB的連線呢？
    public function connect()
    {
        return $this->dbConnection->connect();
    }
}
