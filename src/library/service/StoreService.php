<?php

namespace service;

use domain\Stock;
use domain\Store;

class StoreService
{
    /*
     * @var array
     */
    private $data;

    /*
     * @var array $data
     */
    public function setDataSource($data)
    {
        $this->data = $data;
    }

    /*
     * @return array $data
     */
    public function getDataSource()
    {
        return $this->data;
    }

    public function getStoreByItem($id)
    {
        $stores = array();

        $filteredStores = $this->filterStoreByIdItem($id);

        foreach ($filteredStores as $store)
            array_push($stores, $this->toStore($store));

        // Se é vuoto lancio un'eccezione

        return $stores;
    }

    public function getStoreList()
    {
        $stores = array();

        foreach ($this->data as $key=>$element)
            array_push($stores, $this->toStore($element));

        // Se é vuota lancio un'eccezione

        return $stores;
    }

    public function getItemFromStore($idItem, $idStore)
    {
        $stores = $this->getStoreList();

        foreach ($stores as $key=>$store)
            if ($store->getId() == $idStore)
                foreach ($store->getStocks() as $stock)
                    if ($stock->getIdItem() == $idItem) {
                        $store->setStocks(array($stock));
                        return $store;
                    }

        return false;
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
            $stock->setIdStore($data["id"]);
            $store->setStocks($stock);
        }

        return $store;
    }

    private function toStock($data)
    {
        $stock = new Stock();
        $stock->setIdItem($data["id"]);
        $stock->setQuantity($data["qty"]);
        $stock->setMinQuantity($data["minQty"]);
        return $stock;
    }

    /*private function filterStoreByIdItem($id)
    {
        $filteredStore = array();

        foreach ($this->data as $store)
        {
            foreach ($store["items"] as $stock)
                if ($stock["id"] == $id)
                {
                    $store["items"] = array($stock);
                    array_push($filteredStore, $store);
                    continue;
                }
        }

        return $filteredStore;
    }

    private function filterByIdItemAndStore($idItem, $idStore)
    {
        $filteredStore = array();

        foreach ($this->data as $store)
        {
            foreach ($store["items"] as $stock)
                if ($stock["id"] == $id)
                {
                    $store["items"] = array($stock);
                    array_push($filteredStore, $store);
                    continue;
                }
        }

        return $filteredStore;
    }*/
}