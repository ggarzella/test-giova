<?php

namespace controller;

use factory\StoreFactory;

class StoreController
{
    public function invoke()
    {
        try {
            if ($storeService = StoreFactory::getInstance()->getStoreService())
                $stores = $storeService->getStoreByProduct($_REQUEST['id']);

            include("src/view/storeItems.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}