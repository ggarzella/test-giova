<?php

use controller\HomeController;
use controller\ItemController;
use controller\StoreController;
use controller\ErrorController;
use controller\TestModalController;

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
        case 'test-modal':
            $controller = new TestModalController();
            break;
        default:
            $controller = new HomeController();
    }

    $controller->invoke();
}

if (!isset($controller))
    $controller = 'home';

$controllers = array('home', 'list', 'store', 'test-modal');

if (in_array($controller, $controllers))
    call($controller);
else
    call('error');