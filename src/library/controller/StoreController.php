<?php

namespace controller;

use factory\StoreFactory;

class StoreController
{
    public function invoke()
    {
        try {
            $idItem = $_REQUEST['id'];

            if ($storeService = StoreFactory::getInstance()->getStoreService())
            {
                $data = $storeService->getDataSource();
                uasort($data, array($this, 'sortByDistance'));
                $storeService->setDataSource($data);
                $stores = $storeService->getItemFromStoreList($idItem);
            }

            include("src/view/storeItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }

    private function sortByDistance($element1, $element2)
    {
        if ($element1["distance"] > $element2["distance"])
            return 1;
        else if ($element1["distance"] == $element2["distance"])
            return 0;
        else
            return -1;
    }
}