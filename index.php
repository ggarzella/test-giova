<?php

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'transfer')
    {
        require_once($_GET['page'] . '.php');
        return;
    }
    else
        $controller = $_GET['page'];
}
else
    $controller = 'home';

require_once('src/view/layout.php');