<?php

/**
 * Class HelloWorld | src/processor/BasicStringProcessor.php
 *
 * @category SSamnaniLib
 * @author Shehzad Samnani <shehzadhsamnani@gmail.com>
 * @package SSamnaniLib\Processor\BasicStringProcessor
 * @version 0.0.1
 */

namespace SSamnaniLib\Processor;

use SSamnaniLib\IStringProcessor;

class BasicStringProcessor implements IStringProcessor
{
    public function process($string)
    {
        return $string;
    }
}