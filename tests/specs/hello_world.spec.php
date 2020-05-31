<?php

namespace SSamnaniLib\Tests;

use PHPUnit\Framework\TestCase;
use SSamnaniLib\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function __construct()
    {
        // Think about it later
    }

    public function testObvious()
    {
        $output = HelloWorld::obvious();
        $this->assertEquals(
            "Hello Shehzad",
            $output
        );
    }
}