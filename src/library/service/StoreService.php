<?php

namespace service;

use exception\StoreServiceException;
use model\Stock;
use model\Store;

class StoreService
{
    /*
     * @var array
     */
    private $data;

    /*
     * @var ItemService
     */
    private $itemService;

    /*
     * @param array $data
     */
    public function setDataSource($data)
    {
        $this->data = $data;
    }

    /*
     * @return array
     */
    public function getDataSource()
    {
        return $this->data;
    }

    /*
     * @param ItemService $itemService
     */
    public function setItemService(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    /*
     * @return ItemService
     */
    public function getItemService()
    {
        return $this->itemService;
    }

    public function getStoreList()
    {
        $stores = array();

        foreach ($this->data as $key=>$element)
            array_push($stores, $this->toStore($element));

        return $stores;
    }

    public function getItemFromStore($idStore, $idItem)
    {
        $stores = $this->getStoreList();

        foreach ($stores as $key=>$store)
            if ($store->getId() == $idStore) {
                foreach ($store->getStocks() as $key=>$stock)
                    if ($stock->getIdItem() != $idItem)
                        $store->unsetStocks($key);

                return $store;
            }

        return array();
    }

    public static function filterDataByIdItem($idItem, $data)
    {
        $filteredData = array();

        foreach ($data as $key1=>$store)
        {
            foreach ($store["items"] as $key2 => $item)
            {
                if ($item["id"] == $idItem)
                {
                    $tmp = array();
                    $tmp["id"] = $store["id"];
                    $tmp["name"] = $store["name"];
                    $tmp["distance"] =  $store["distance"];
                    $tmp["items"][0] = $item;
                    array_push($filteredData, $tmp);
                }
            }
        }

        if (empty($filteredData))
            throw new StoreServiceException(utf8_encode("Nessun negozio � fornito di questo prodotto"));

        return $filteredData;
    }

    private function toStore($data)
    {
        $store = new Store();
        $store->setId($data["id"]);
        $store->setName($data["name"]);
        $store->setDistance($data["distance"]);

        foreach ($data["items"] as $item)
        {
            $stock = $this->toStock($item);
            $store->setStocks($stock);
        }

        return $store;
    }

    private function toStock($data)
    {
        $stock = new Stock();
        $stock->setIdItem($data["id"]);
        $itemService = $this->getItemService();
        $item = $itemService->getItemById($data["id"]);
        $stock->setNameItem($item->getName());
        $stock->setQuantity($data["qty"]);
        $stock->setMinQuantity($data["minQty"]);
        return $stock;
    }
}