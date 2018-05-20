<?php

try {

    if (!isset($_POST['idStore']) || !isset($_POST['idItem']) || !isset($_POST['quantity']))
        throw new \Exception("Parametri non corretti");

    $idStore = $_POST['idStore'];
    $idItem = $_POST['idItem'];
    $quantity = $_POST['quantity'];

    if ($storeService = \factory\StoreFactory::getInstance()->getStoreService())
        $store = $storeService->getItemFromStore($idStore, $idItem);

    foreach ($store->getStocks() as $key=>$stock)
        $index = $key;

    $result = array(
        "store" => $store->getName(),
        "item" => $store->getStocks()[$index]->getNameItem(),
        "quantity" => $quantity
    );

    echo json_encode($result);

} catch (\Exception $e) {
    $msg = $e->getMessage();
    var_dump($msg);
}