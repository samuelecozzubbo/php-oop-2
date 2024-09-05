<?php

//dichiarazione della classe Product
class Product
{
    // proprità obbligatorie
    protected $title;
    public $price;
    public $image;
    public $category;
    public $type;

    // passando le proprietà al costruttore rendo obbligatori determinati dati
    public function __construct(string $_title, float $_price, string $_image, Category $_category, string $_type)
    {
        $this->setTitle($_title);
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->type = $_type;
    }

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
}
