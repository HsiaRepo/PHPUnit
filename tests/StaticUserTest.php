<?php


use PHPUnit\Framework\TestCase;

class StaticUserTest extends TestCase
{

    public function testNotifyReturnsTrue()
    {
        $user = new StaticUser('logan@hsia.us');

        $mailer = new StaticMailer;

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('amogus'));
    }

}
