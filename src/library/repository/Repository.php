<?php

namespace repository;

abstract class Repository
{
    public function __construct($data)
    {
        $this->data = $data;
    }
}