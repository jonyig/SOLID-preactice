<?php

namespace Solid\D\Example;


use Solid\D\Common\Contract\DBConnectionInterface;

class PasswordRemainder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function connect()
    {
        return $this->dbConnection->connect();
    }
}
