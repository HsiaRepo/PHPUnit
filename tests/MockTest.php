<?php


use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);

        $result = $mock->sendMessage('logan@example.com', 'werd');

        var_dump($result);
    }
}
