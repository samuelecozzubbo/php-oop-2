<?php

class Category
{
    public $name;
    public $icon;

    public function __construct(string $_name, string $_description)
    {
        $this->name = $_name;
        $this->icon = $_description;
    }
}
