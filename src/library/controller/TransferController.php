<?php

namespace controller;

use factory\StoreFactory;

class TransferController
{
    public function invoke()
    {
        $idItem = $_REQUEST['idItem'];
        $idStore = $_REQUEST['idStore'];
        $quantity = $_REQUEST['quantity'];

        try {
            if ($storeService = StoreFactory::getInstance()->getStoreService())
                $store = $storeService->getStoreByItem($idItem, $idStore);

            include("src/view/transfer.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}