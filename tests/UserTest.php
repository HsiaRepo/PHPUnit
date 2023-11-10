<?php


use PHPUnit\Framework\TestCase;
use src\User;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {

        $user = new User;

        $user->first_name = "Bobby";
        $user->surname = "Shmurda";

        $this->assertEquals('Bobby Shmurda', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }
}
