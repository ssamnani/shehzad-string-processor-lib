<?php

/**
 * Class UppercaseStringProcessor | src/processor/UppercaseStringProcessor.php
 *
 * @category SSamnaniLib
 * @author Shehzad Samnani <shehzadhsamnani@gmail.com>
 * @package SSamnaniLib\Processor\UppercaseStringProcessor
 * @version 0.0.1
 */

namespace SSamnaniLib\Processor;

use SSamnaniLib\IStringProcessor;

class UppercaseStringProcessor implements IStringProcessor
{
    public function process($string)
    {
        return strtoupper($string);
    }
}