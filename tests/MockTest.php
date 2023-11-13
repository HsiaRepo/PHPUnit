<?php


use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);

        $mock->method('sendMessage')
            ->willReturn(true);

        $result = $mock->sendMessage('logan@hsia.us', 'werd');

        $this->assertTrue($result);
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('logan@hsia.us'), $this->equalTo('werd'))
            ->willReturn(true);

        $user->setMailer($mock_mailer);

        $user->email = 'logan@hsia.us';

        $this->assertTrue($user->notify("werd"));
    }

    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User;

        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->onlyMethods([])
                            ->getMock();

        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        $user->notify("werd");
    }
}
