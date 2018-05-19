<?php

namespace domain;

class Store
{
    /*
     * @var int
     */
    private $id;

    /*
     * @var array
     */
    private $stocks = array();

    /*
     * @var string
     */
    private $name;

    /*
     * @var int
     */
    private $distance;

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
     * @return array
     */
    public function getStocks()
    {
        return $this->stocks;
    }

    /**
     * @param Stock
     */
    public function setStocks($stock)
    {
        array_push($this->stocks, $stock);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }
}