<?php

class food extends products
{
    public $weight;
    public $ingredients;

    public function __construct($weight, $ingredients)
    {
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}
