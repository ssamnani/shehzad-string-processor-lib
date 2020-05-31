<?php

namespace SSamnaniLib\Tests;

use PHPUnit\Framework\TestCase;
use SSamnaniLib\Processor\BasicStringProcessor;

class BasicStringProcessorTest extends TestCase
{
    public function __construct()
    {
        // Think about it later
    }

    public function testStringProcessing()
    {
        $input = "hello world";
        $output = "hello world";
        $processor = new BasicStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }
}