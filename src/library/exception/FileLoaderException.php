<?php

namespace exception;

class FileLoaderException extends \Exception
{
    public function __construct($message)
    {
        $message = "File $message inesistente";
        parent::__construct($message);
    }
}