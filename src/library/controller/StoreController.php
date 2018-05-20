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
                $stores = $storeService->getItemFromStoreList($idItem);

            include("src/view/storeItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}