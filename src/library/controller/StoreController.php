<?php

namespace controller;

use factory\StoreFactory;
use utils\ListSorter;

class StoreController implements IController
{
    public function invoke()
    {
        try {
            $idItem = $_REQUEST['id'];

            if ($storeService = StoreFactory::getInstance()->getStoreService())
            {
                $data = $storeService->getDataSource();
                $data = $storeService::filterDataByIdItem($idItem, $data);
                array_multisort(
                    array_column($data, "distance"), SORT_ASC,
                    array_column($data, "items", "qty"), SORT_ASC,
                    $data
                );
                $storeService->setDataSource($data);
                $stores = $storeService->getStoreList();
            }

            include("src/view/storeItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}