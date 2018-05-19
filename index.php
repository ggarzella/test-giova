<?php

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_GET['page']))
    $controller = $_GET['page'];

require_once('src/view/layout.php');