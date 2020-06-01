<?php

namespace SSamnaniLib\Tests;

use PHPUnit\Framework\TestCase;
use SSamnaniLib\Processor\AlternateCaseStringProcessor;

class AlternateCaseStringProcessorTest extends TestCase
{
    public function __construct()
    {
        // Think about it later
    }

    public function testStringProcessingAlternateCase()
    {
        $input = "hello world";
        $output = "hElLo wOrLd";
        $processor = new AlternateCaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }
}