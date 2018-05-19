<?php

namespace controller;

class ErrorController
{
    public function invoke()
    {
        include("src/view/error.php");
    }
}