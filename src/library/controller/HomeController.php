<?php

namespace controller;

class HomeController implements IController
{
    public function invoke()
    {
        include("src/view/home.php");
    }
}