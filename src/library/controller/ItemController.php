<?php

namespace controller;

use factory\ItemFactory;
use utils\ListSorter;

class ItemController
{
    public function invoke()
    {
        try {
            if ($itemService = ItemFactory::getInstance()->getItemService())
            {
                $data = $itemService->getDataSource();
                uasort($data, array($this, 'sortByName'));
                $itemService->setDataSource($data);
                $items = $itemService->getItemList($data);
            }

            include("src/view/listItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }

    public function sortByName($element1, $element2)
    {
        return strcasecmp($element1["name"], $element2["name"]);
    }
}