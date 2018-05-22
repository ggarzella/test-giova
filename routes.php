<?php

use utils\fileLoader\FileLoader;
use controller\HomeController;
use controller\ItemController;
use controller\StoreController;
use controller\ErrorController;

function call($controller)
{
    switch($controller)
    {
        case 'list':
            $controller = new ItemController();
            break;
        case 'store':
            if (isset($_GET['id']))
                $controller = new StoreController();
            else
                return call('error');
            break;
        case 'error':
            $controller = new ErrorController();
            break;
        default:
            $controller = new HomeController();
    }

    $controller->invoke();
}

$config = FileLoader::loadContent(__DIR__ . '/data/config.ini');

$controllers = explode(",", trim($config['controllerPages']));
$pages = explode(",", trim($config['singlePages']));

if (isset($_GET['page']))
{
    if (in_array($_GET['page'], $singlePages))
    {
        require_once($_GET['page'] . '.php');
        return;
    }
    else if (in_array($_GET['page'], $controllers))
        call($_GET['page']);
    else
        call('error');
}
else
    call('home');