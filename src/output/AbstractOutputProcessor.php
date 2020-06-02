<?php

namespace SSamnaniLib\Output;

abstract class AbstractOutputProcessor
{
    private $stream = null;
    private $processor = null;

    /**
     * @param $processor IStringProcessor Processor to use
     */
    function __construct($processor, $stream)
    {
        // As per the requirement, we need to print the output on a particular stream
        // stdout, others might come later
        $this->stream = $stream;
        $this->processor = $processor;
    }

    protected function get_stream()
    {
        return $this->stream;
    }

    protected function write($text)
    {
        fputs($this->get_stream(), $text);
    }

    public function ProcessIt($input)
    {
        $result = $this->processor->process($input);
        $this->write($result);
    }
}