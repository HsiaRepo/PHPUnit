<?php


use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require 'User.php';

        $user = new User;

        $user->first_name = "Bobby";
        $user->surname = "Shmurda";

        $this->assertEquals('Bobby Shmurda', $user->getFullName());
    }
}
