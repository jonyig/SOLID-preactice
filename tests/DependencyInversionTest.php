<?php
/**
 * Created by PhpStorm.
 * User: jonny
 * Date: 2020-04-17
 * Time: 17:49
 */

namespace Solid\Test;


use PHPUnit\Framework\TestCase;
use Solid\D\Common\MongoDBConnection;
use Solid\D\Common\MySQLConnection;
use Solid\D\Mistake\PasswordRemainder as Mistake;
use Solid\D\Example\PasswordRemainder;

class DependencyInversionTest extends TestCase
{
    /** @test */
    public function is_can_run_mistake()
    {
        $password = new Mistake(new MySQLConnection());

        $this->assertIsString($password->connect());
    }

    /** @test */
    public function is_can_run_example()
    {
        $password = new PasswordRemainder(new MongoDBConnection());

        $this->assertIsString($password->connect());
    }
}
