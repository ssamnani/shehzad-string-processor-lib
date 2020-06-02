<?php

/**
 * Class CSVStringProcessor | src/processor/CSVStringProcessor.php
 *
 * @category SSamnaniLib
 * @author Shehzad Samnani <shehzadhsamnani@gmail.com>
 * @package SSamnaniLib\Processor\CSVStringProcessor
 * @version 0.0.1
 */

namespace SSamnaniLib\Processor;

use SSamnaniLib\IStringProcessor;
use SSamnaniLib\Output\IWriter;

class CSVStringProcessor implements IStringProcessor
{
    private $writer = null;

    function __construct(IWriter $writer)
    {
        $this->writer = $writer;
    }

    public function process($string)
    {
        $this->writer->write(implode(",", str_split($string)));
        return "CSV created!";
    }
}