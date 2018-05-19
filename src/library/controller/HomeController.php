<?php

namespace controller;

use factory\ItemFactory;
use factory\StoreFactory;

class HomeController
{
    public function invoke()
    {
        $command = isset($_REQUEST['page']) ? $_REQUEST['page'] : "home";

        switch ($command)
        {
            case "list":
                try {
                    if ($itemService = ItemFactory::getInstance()->getItemService())
                        $items = $itemService->getItemList();

                    include("src/view/listItems.php");
                } catch (\Exception $e) {
                    $msg = $e->getMessage();
                    var_dump($msg);
                }
                break;
            case "store":
                try {
                    if (isset($_REQUEST['id']) && $storeService = StoreFactory::getInstance()->getStoreService())
                        $stores = $storeService->getStoreByProduct($_REQUEST['id']);

                    include("src/view/storeItems.php");
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