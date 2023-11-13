<?php


use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);

        $mock->method('sendMessage')
            ->willReturn(true);

        $result = $mock->sendMessage('logan@example.com', 'werd');

        $this->assertTrue($result);
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $user->email = 'logan@hsia.us';

        $this->assertTrue($user->notify("herd"));
    }
}
