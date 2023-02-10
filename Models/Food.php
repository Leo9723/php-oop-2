<?php

class Food extends Product
{
    public $weight;
    public $ingredients;

//   =======> AVENDO UNA CLASSE CATEGORIA IN CATEGORIA.PHP VADO AD INCAPSULARLO QUA E POSSO FARE QUESTO PER CREARE IL DATABASE SENZA SET E GET <=======

//    public function __construct ($name, $price, $image, [PER SCRIVERE CATEGORIA DEVO AVERE UN FILE Categoria.php =====>]Categoria $category, $material, $size){
//        parent::__construct($name, $price, $image, $category);
//        $this->material = $material;
//        $this->size = $size;
//    }

// tutta la roba da qua in poi è inutile!!!

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
