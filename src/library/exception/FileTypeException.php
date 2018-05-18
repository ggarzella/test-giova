<?php

namespace exception;

class FileTypeException extends \Exception
{
    public function __construct($message)
    {
        $message = "Il file $message da caricare non ha nessuna delle estensioni previste";
        parent::__construct($message);
    }
}