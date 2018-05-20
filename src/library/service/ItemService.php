<?php

namespace service;

use domain\Item;
use repository\ItemRepository;

class ItemService
{
    /*
     * @var array
     */
    private $data;

    /*
     * @var ItemRepository
     */
    private $itemRepository;

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

    /**
     * @return ItemRepository
     */
    public function getItemRepository()
    {
        return $this->itemRepository;
    }

    /*
     * @var ItemRepository
     */
    public function setItemRepository(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function getItemList()
    {
        $items = array();

        foreach ($this->data as $element)
            array_push($items, $this->toItem($element));

        return $items;
    }

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