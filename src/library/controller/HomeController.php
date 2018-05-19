<?php

namespace controller;

use factory\ItemFactory;
use factory\StoreFactory;

class HomeController
{
    public function invoke()
    {
        include("src/view/home.php");
    }
}