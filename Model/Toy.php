<?php

class Toy extends Product
{
    public $material;
    public $size;
    public function __construct(string $_title, float $_price, string $_image, Category $_category, string $_material, string $_size)
    {
        parent::__construct($_title, $_price, $_image, $_category, "Toy");
        $this->material = $_material;
        $this->size = $_size;
    }
}
