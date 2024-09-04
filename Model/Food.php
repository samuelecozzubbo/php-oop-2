<?php

class Food extends Product
{
    public $weight;
    public $ingredients = [];
    public $expirationDate;


    public function __construct(string $_title, float $_price, string $_image, Category $_category, float $_weight, array $_ingredients, string $_expirationDate)
    {
        // richiamo il costruttore della classe genitore
        parent::__construct($_title, $_price, $_image, $_category, 'food');
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->expirationDate = $_expirationDate;
    }
}
