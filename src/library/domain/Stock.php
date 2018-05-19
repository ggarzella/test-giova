<?php

namespace domain;

class Stock
{
    /*
     * @var int
     */
    private $idItem;

    /*
     * @var int
     */
    private $idStore;

    /*
     * @var int
     */
    private $quantity;

    /*
     * @var int
     */
    private $minQuantity;

    /**
     * @return Item
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * @param Item
     */
    public function setIdItem($id)
    {
        $this->idItem = $id;
    }

    /**
     * @return int
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @param int $idStore
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;
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