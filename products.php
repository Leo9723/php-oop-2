<?php

class products
{
    public $name;
    public $price;
    public $animalType;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName($name)
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice($price)
    {
        return $this->price;
    }

    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;
    }

    public function getAnimalType($animalType)
    {
        return $this->animalType;
    }
}
