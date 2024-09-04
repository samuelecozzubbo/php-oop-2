<?php

//dichiarazione della classe Product
class Product
{
    // proprità obbligatorie
    public $title;
    public $price;
    public $image;
    public $category;
    public $type;

    // passando le proprietà al costruttore rendo obbligatori determinati dati
    public function __construct(string $_title, float $_price, string $_image, string $_category, string $_type)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->type = $_type;
    }
}
