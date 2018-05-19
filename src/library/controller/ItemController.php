<?php

namespace controller;

use factory\ItemFactory;

class ItemController
{
    public function invoke()
    {
        try {
            if ($itemService = ItemFactory::getInstance()->getItemService())
                $items = $itemService->getItemList();

            include("src/view/listItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}