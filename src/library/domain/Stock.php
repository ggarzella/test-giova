<?php

namespace domain;

class Stock
{
    /*
     * @var int
     */
    private $idItem;

    /*
     * @var string
     */
    private $nameItem;

    /*
     * @var int
     */
    private $quantity;

    /*
     * @var int
     */
    private $minQuantity;

    /**
     * @return int
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * @param int $id
     */
    public function setIdItem($id)
    {
        $this->idItem = $id;
    }

    /**
     * @return string
     */
    public function getNameItem()
    {
        return $this->nameItem;
    }

    /**
     * @param string $nameItem
     */
    public function setNameItem($nameItem)
    {
        $this->nameItem = $nameItem;
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