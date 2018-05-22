<?php

namespace controller;

class ErrorController implements IController
{
    public function invoke()
    {
        include("src/view/error.php");
    }
}