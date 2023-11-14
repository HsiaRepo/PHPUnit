<?php


use PHPUnit\Framework\TestCase;

class OrderSpyTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testOrderIsProcessedUsingAMock()
    {
        $order = new Order(3, 1.99);

        $this->assertEquals(5.97, $order->amount);

        $gateway_mock = Mockery::mock('PaymentGateway');

        $gateway_mock->shouldReceive('charge')
            ->once()
            ->with(5.97);

        $order->process($gateway_mock);
    }
}
