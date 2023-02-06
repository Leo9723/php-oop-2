<?php

class toy extends products
{
    public $hallmarks;
    public $size;

    public function __construct($hallmarks, $size)
    {
        $this->hallmarks = $hallmarks;
        $this->size = $size;
    }

    public function setHallmarks($hallmarks)
    {
        $this->hallmarks = $hallmarks;
    }

    public function getHallmarks()
    {
        return $this->hallmarks;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
