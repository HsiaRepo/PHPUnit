<?php


use PHPUnit\Framework\TestCase;

class StaticUserTest extends TestCase
{

    public function testNotifyReturnsTrue()
    {
        $user = new StaticUser('logan@hsia.us');

        $this->assertTrue($user->notify('amogus'));
    }

}
