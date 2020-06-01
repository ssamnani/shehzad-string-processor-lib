<?php

namespace SSamnaniLib\Tests;

use PHPUnit\Framework\TestCase;
use SSamnaniLib\Processor\UppercaseStringProcessor;

class UppercaseStringProcessorTest extends TestCase
{
    public function __construct()
    {
        // Think about it later
    }

    public function testStringProcessingLowerToUpper()
    {
        $input = "hello world";
        $output = "HELLO WORLD";
        $processor = new UppercaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }

    public function testStringProcessingMixToUpper()
    {
        $input = "HeLLo wORld";
        $output = "HELLO WORLD";
        $processor = new UppercaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }

    public function testStringProcessingUpperToUpper()
    {
        $input = "HELLO WORLD";
        $output = "HELLO WORLD";
        $processor = new UppercaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }
}