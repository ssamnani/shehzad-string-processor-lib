<?php

namespace SSamnaniLib\Output;

class FileWriter implements IWriter
{
    private $path = null;
    private $filePointer = null;
    private $isOpen = false;

    function __construct($filePath)
    {
        $this->path = $filePath;
    }

    public function open()
    {
        $this->filePointer = fopen($this->path, "w");
        $this->isOpen = true;
    }

    public function close()
    {
        if ($this->isOpen)
            fclose($this->filePointer);

        $this->isOpen = false;
    }

    public function write($text)
    {
        if (!$this->isOpen)
            $this->open();

        fwrite($this->filePointer, $text);
    }

    function __destruct()
    {
        $this->close();
    }
}