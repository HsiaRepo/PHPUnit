<?php


use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturnsCorrectSum()
    {
        require 'functions.php';

        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(10, add(5, 5));

    }
    public function testAddDoesNotReturnsIncorrectSum()
    {

        $this->assertNotEquals(5, add(2, 2));

    }
}
