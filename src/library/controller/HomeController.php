<?php

namespace controller;

class HomeController
{
    public function invoke()
    {
        include("src/view/home.php");
    }
}