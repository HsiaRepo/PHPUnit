<?php


use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testOrderIsProcessed()
    {
//        Can't use a dependency that doesn't exist yet
//        $gateway = new PaymentGateway;

//        Cannot pass a non-existent class to create a mock
//        $gateway = $this->createMock('PaymentGateway');

//        Not based on existing class. Need to explicitly specify methods used
//        $gateway = $this->getMockBuilder('PaymentGateway')
//                        ->getMock();

        // Create a mock of the PaymentGateway class [[CLASS NEEDS TO EXIST AND FUNCTION IN CLASS NEEDS TO EXIST]]
        $gateway = $this->getMockBuilder(PaymentGateway::class)
            ->onlyMethods(['charge']) // Use onlyMethods instead of setMethods
            ->getMock();

        // Set up the expectation for the charge method
        $gateway->expects($this->once())
            ->method('charge')
            ->with($this->equalTo(200))
            ->willReturn(true);

        // Create an Order instance with the mock gateway
        $order = new Order($gateway);
        $order->amount = 200;

        // Assert that the order processing returns true
        $this->assertTrue($order->process());
    }
}
