<?php

use PHPUnit\Framework\TestCase;
use Tools\Value;

class ValueTest extends TestCase
{
    public function testAssign()
    {
        $value = new ValueTestClass([
            "isPublic" => true,
        ]);

        $this->assertEquals($value->isPublic, true);

        $this->assertArrayHasKey("isPublic", $value->toArray());
    }

    public function testPrivate()
    {
        $this->expectErrorMessage("Cannot access private property");
        new ValueTestClass([
            "isPrivate" => true,
            "isPublic" => true
        ]);

    }
}

class ValueTestClass extends Value
{
    public $isPublic;
    private $isPrivate;
}
