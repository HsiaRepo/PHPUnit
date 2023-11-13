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

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->method('sendMessage')
            ->willReturn(true);

        $user->setMailer($mock_mailer);

        $user->email = 'logan@hsia.us';

        $this->assertTrue($user->notify("herd"));
    }
}
