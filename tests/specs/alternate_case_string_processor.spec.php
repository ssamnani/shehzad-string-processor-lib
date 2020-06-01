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

    public function testStringProcessingLowerToAlternate()
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

    public function testStringProcessingUpperToAlternate()
    {
        $input = "HELLO WORLD";
        $output = "hElLo wOrLd";
        $processor = new AlternateCaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }

    public function testStringProcessingMixToAlternate()
    {
        $input = "HelLO WOrLD";
        $output = "hElLo wOrLd";
        $processor = new AlternateCaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }

    public function testStringProcessingNumericSpecialStringToAlternate()
    {
        $input = "!=HelLO %1& WOrLD #$@";
        $output = "!=hElLo %1& wOrLd #$@";
        $processor = new AlternateCaseStringProcessor();
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }
}