<?php

namespace SSamnaniLib\Output;

abstract class AbstractWriter
{
    abstract function open();
    abstract function close();
    abstract function write($text);
}