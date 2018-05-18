<?php

namespace entity;

class StockEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $id_item;

    /**
     * @var int
     */
    private $id_store;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $minQuantity;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdItem()
    {
        return $this->id_item;
    }

    /**
     * @param int $id_item
     */
    public function setIdItem($id_item)
    {
        $this->id_item = $id_item;
    }

    /**
     * @return int
     */
    public function getIdStore()
    {
        return $this->id_store;
    }

    /**
     * @param int $id_store
     */
    public function setIdStore($id_store)
    {
        $this->id_store = $id_store;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getMinQuantity()
    {
        return $this->minQuantity;
    }

    /**
     * @param int $minQuantity
     */
    public function setMinQuantity($minQuantity)
    {
        $this->minQuantity = $minQuantity;
    }
}