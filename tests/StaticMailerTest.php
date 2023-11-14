<?php


use PHPUnit\Framework\TestCase;

class StaticMailerTest extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(StaticMailer::send('logan@hsia.us', 'oonga boonga'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        StaticMailer::send('', '');
    }
}
