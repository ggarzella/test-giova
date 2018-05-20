<?php

namespace repository;

use entity\ItemEntity;

class ItemRepository extends Repository
{
    /*
     * @var ItemEntity
     */
    private $entity;

    /**
     * @return ItemEntity
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /*
     * @var ItemEntity
     */
    public function setEntity(ItemEntity $entity)
    {
        $this->entity = $entity;
    }

    public function getItemList()
    {
        $list = array();

        foreach ($this->data as $item)
            array_push($list, $this->toEntity($item));

        return $list;
    }

    public function getItemById($id)
    {
        $item = array();

        foreach ($this->data as $item)
            if ($item["id"] == $id)
                return $this->toEntity($item);

        return $item;
    }

    private function toEntity($data)
    {
        $entity = new ItemEntity();
        $entity->setId($data["id"]);
        $entity->setName($data["name"]);
        $entity->setDescription($data["description"]);
        $entity->setCountry($data["country"]);
        return $entity;
    }
}