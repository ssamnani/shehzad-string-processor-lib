<?php

interface IWriter
{
    public function open();
    public function close();
    public function write($text);
}