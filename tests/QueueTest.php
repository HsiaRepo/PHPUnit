<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{

    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToQueue()
    {
        $this->queue->push('green');

        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemIsRemovedFromQueue()
    {
        $this->queue->push('green');
        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());
        $this->assertEquals('green', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfQueue()
    {
        $this->queue->push('first');
        $this->queue->push('second');

        $this->assertEquals('first', $this->queue->pop());
    }
}
