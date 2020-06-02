<?php

namespace SSamnaniLib\Output;

class StandardOutputStringProcessor extends AbstractOutputProcessor
{
    function __construct($processor)
    {
        parent::__construct($processor, fopen('php://output', 'w'));
    }

    function __destruct()
    {
        fclose($this->get_stream());
    }
}