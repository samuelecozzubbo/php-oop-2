<?php

require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Toy.php';

// Categorie
$dog = new Category('Cani', 'prodotti per cani');
$cat = new Category('Gatti', 'prodotti per gatti');
$gadget = new Category('Gadget', 'portachaivi');

// Prodotti
$products = [
    new Food('Croccantini Premium', 19.99, 'images/croccantini.jpg', $dog, 3.0, ['Pollo', 'Riso', 'Verdure'], '2025-12-31'),
    new Food('Cibo Umido per Gatti', 12.49, 'images/cibo_umido.jpg', $cat, 1.2, ['Tonno', 'Pollo'], '2024-11-30'),
    new Toy('Palla di Gatto', 7.99, 'images/palla_gatto.jpg', $cat, 'Gomma', 'Small'),
    new Toy('Osso da Masticare', 9.99, 'images/osso_masticare.jpg', $dog, 'Nylon', 'Medium'),
    new Toy('Tunnel per Gatti', 15.49, 'images/tunnel_gatti.jpg', $cat, 'Tessuto', 'Large'),
    new Product('portachiavi', 3.99, 'images/portachiavi', $gadget, 'portachiavi'),
];
var_dump($products);
