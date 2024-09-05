<?php

//dichiarazione della classe Product
class Product
{
    // proprità obbligatorie
    protected $title;
    protected $price;
    public $image;
    public $category;
    public $type;

    // passando le proprietà al costruttore rendo obbligatori determinati dati
    public function __construct(string $_title, float $_price, string $_image, Category $_category, string $_type)
    {
        $this->setTitle($_title);
        $this->setPrice($_price);
        $this->image = $_image;
        $this->category = $_category;
        $this->type = $_type;
    }
    //TITLE GETTER AND SETTER
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($_title)
    {
        // controllo di name
        // // se tutto ok assegno il valore
        if (empty($_title) || (strlen($_title) < 3)) {
            throw new Exception('Il titolo deve contenere almeno 3 caratteri');
        } else {
            $this->title = $_title;
        }
    }

    //PRICE GETTER AND SETTER
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($_price)
    {
        if (!is_numeric($_price)) {
            throw new Exception('Il prezzo deve essere un numero');
        } else {
            $this->price = $_price;
        }
    }
}
