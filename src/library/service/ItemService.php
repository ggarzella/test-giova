<?php

namespace service;

use exception\ItemServiceException;
use model\Item;

class ItemService
{
    /*
     * @var array
     */
    private $data;

    /*
     * @return array
     */
    public function getDataSource()
    {
        return $this->data;
    }

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
    public function getItemList()
    {
        $items = array();

        foreach ($this->data as $element)
            array_push($items, $this->toItem($element));

        if (empty($items))
            throw new ItemServiceException(utf8_encode("Non esiste alcun prodotto"));

        return $items;
    }

    /*
     * @param int $id
     * @return array
     */
    public function getItemById($id)
    {
        foreach ($this->data as $element)
            if ($element['id'] == $id)
                return $this->toItem($element);

        throw new ItemServiceException(utf8_encode("Il prodotto richiesto non esiste"));
    }

    /*
     * @param array $data
     * @return Item
     */
    private function toItem($data)
    {
        $item = new Item();
        $item->setId($data["id"]);
        $item->setName($data["name"]);
        $item->setDescription($data["description"]);
        $item->setCountry($data["country"]);
        return $item;
    }
}