<?php

namespace exception;

class StoreServiceException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}