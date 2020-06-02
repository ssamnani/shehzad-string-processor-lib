<?php

namespace SSamnaniLib\Tests;

use PHPUnit\Framework\TestCase;
use SSamnaniLib\Output\FileWriter;
use SSamnaniLib\Processor\CSVStringProcessor;

class CSVStringProcessorTest extends TestCase
{
    private $writer = null;

    public function __construct()
    {
        $this->writer = $this->createMock(FileWriter::class);
    }

    public function testStringProcessing()
    {
        $input = "hello world";
        $output = "CSV created!";

        $fileInput = "h,e,l,l,o, ,w,o,r,l,d";


        $this->writer->expects($this->once())
            ->method('write')
            ->with($fileInput);

        $processor = new CSVStringProcessor($this->writer);
        $result = $processor->process($input);
        $this->assertEquals(
            $output,
            $result
        );
    }
}
