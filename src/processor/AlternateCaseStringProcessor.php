<?php

/**
 * Class HelloWorld | src/processor/AlternateCaseStringProcessor.php
 *
 * @category SSamnaniLib
 * @author Shehzad Samnani <shehzadhsamnani@gmail.com>
 * @package SSamnaniLib\Processor\AlternateCaseStringProcessor
 * @version 0.0.1
 */

namespace SSamnaniLib\Processor;

use SSamnaniLib\IStringProcessor;

class AlternateCaseStringProcessor implements IStringProcessor
{
    public function process($string)
    {
        $altCaseString = "";
        for($i = 0; $i < strlen($string); $i++)
        {
            $altCaseString[$i] = $i % 2 == 0 ? strtolower($string[$i]) : strtoupper($string[$i]);
        }

        return $altCaseString;
    }
}