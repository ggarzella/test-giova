<?php

namespace controller;

use factory\StoreFactory;

class TransferController
{
    public function invoke()
    {
        $idStore = $_REQUEST['idStore'];
        $idItem = $_REQUEST['idItem'];
        $quantity = $_REQUEST['quantity'];

        try {
            if ($storeService = StoreFactory::getInstance()->getStoreService())
                $store = $storeService->getItemFromStore($idStore, $idItem);

            include("src/view/transfer.php");
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            var_dump($msg);
        }
    }
}