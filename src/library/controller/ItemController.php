<?php

namespace controller;

use factory\ItemFactory;
use utils\ListSorter;

class ItemController implements IController
{
    public function invoke()
    {
        try {
            if ($itemService = ItemFactory::getInstance()->getItemService())
            {
                $data = $itemService->getDataSource();
                array_multisort(
                    array_column($data, "name"), SORT_ASC,
                    $data
                );
                $itemService->setDataSource($data);
                $items = $itemService->getItemList($data);
            }

            include("src/view/listItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}