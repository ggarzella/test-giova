<?php

require_once __DIR__ . '/vendor/autoload.php';

use utils\fileLoader\FileLoader;

$config = FileLoader::loadContent(__DIR__ . '/data/config.ini');

$controllers = explode(",", trim($config['controllerPages']));
$singlePages = explode(",", trim($config['singlePages']));

if (isset($_GET['page']))
{
    if (in_array($_GET['page'], $singlePages))
    {
        require_once($_GET['page'] . '.php');
        return;
    }
    else if (in_array($_GET['page'], $controllers))
        $controller = $_GET['page'];
    else
    {
        require_once(__DIR__ . '/src/view/error.php');
        return;
    }
}
else
    $controller = 'home';

require_once('src/view/layout.php');