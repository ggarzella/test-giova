<?php

namespace controller;

use exception\ItemServiceException;
use factory\ItemFactory;
use utils\ListSorter;

class ItemController implements IController
{
    public function invoke()
    {
        try
        {
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
        }
        catch (ItemServiceException $e)
        {
            $errorMessage = $e->getMessage();
        }

        include("src/view/listItems.php");
    }
}