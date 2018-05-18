<?php

namespace controller;

use factory\ItemFactory;

class HomeController
{
    public function invoke()
    {
        $command = isset($_REQUEST['command']) ? $_REQUEST['command'] : "home";

        switch ($command)
        {
            case "list":

                try {
                    if ($factory = ItemFactory::getInstance()->getItemService())
                        $items = $factory->getItemList();

                    include("src/view/listItems.php");
                } catch (\Exception $e) {
                    $msg = $e->getMessage();
                    var_dump($msg);
                }
                break;
            default:
                try {
                    include("src/view/home.php");
                } catch (\Exception $e) {
                    $msg = $e->getMessage();
                    var_dump($msg);
                }
        }
    }
}