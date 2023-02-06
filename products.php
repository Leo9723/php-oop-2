<?php

class products
{
    public $name;
    public $price;
    public $animalType;
    public $image;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
}
