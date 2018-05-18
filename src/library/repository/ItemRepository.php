<?php

namespace repository;

use entity\ItemEntity;

class ItemRepository extends Repository
{
    public function getItemList()
    {
        $list = array();

        foreach ($this->data as $key=>$item)
            array_push($list, $this->toEntity($item));

        return $list;
    }

    private function toEntity($item)
    {
        $entity = new ItemEntity();
        $entity->setId($item["id"]);
        $entity->setName($item["name"]);
        $entity->setDescription($item["description"]);
        $entity->setCountry($item["country"]);
        return $entity;
    }
}