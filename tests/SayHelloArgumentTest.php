<?php


use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    public function testPositive() {
        $this -> assertIsString(sayHelloArgument());
    }
}
