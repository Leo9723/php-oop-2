<?php

class extra extends products
{
    public $material;
    public $size;

    public function __construct($material, $size)
    {
        $this->material = $material;
        $this->size = $size;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
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
