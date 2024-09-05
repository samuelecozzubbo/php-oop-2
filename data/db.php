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
    new Food('Croccantini Premium', 19.99, 'https://www.jonicamangimi.com/1224-home_default/top-premium-adult-manzo-arrosto-3kg.jpg', $dog, 3.0, ['Pollo', 'Riso', 'Verdure'], '2025-12-31'),
    new Food('Cibo Umido per Gatti', 12.49, 'https://www.quattrozampeshop.it/thumb.php?width=400&height=400&file=https://pics.quattrozampeshop.it/articoli/154/royal_canin_sterilised_gravy_in_salsa_per_gatti.jpg', $cat, 1.2, ['Tonno', 'Pollo'], '2024-11-30'),
    new Toy('Palla di Gatto', 7.99, 'https://m.media-amazon.com/images/I/515LZ4aU3NL._AC_UF894,1000_QL80_.jpg', $cat, 'Gomma', 'Small'),
    new Toy('Osso da Masticare', 9.99, 'https://m.media-amazon.com/images/I/81Ak8xtPMbL.jpg', $dog, 'Nylon', 'Medium'),
    new Toy('Tunnel per Gatti', 15.49, 'https://m.media-amazon.com/images/I/71Y2ibHoPgL.jpg', $cat, 'Tessuto', 'Large'),
    new Product('portachiavi', 3.99, 'https://www.vialemagico.it/23188-large_default/portachiavi-animali-della-savana-metallo-cromato.jpg', $gadget, 'portachiavi'),
    new Food('Scatoletta di tonno', 3.50, 'https://www.ipelosi.it/cache/monge-cat-natural-superpremium-80-gr-tonno-scatoletta-gatti_47_it.png-750-750.jpg', $cat, 0.5, ['tonno', 'olio', 'sale'], 2025 - 10 - 07),
];
/* var_dump($products); */

$newData = [
    [
        'title' => 'Tiragraffi',
        'price' => 'ERRORE PREZZO QUI',
        'image' =>  'https://m.media-amazon.com/images/I/71OU4RjjBaL.jpg',
        'category' => $cat,
        'material' => 'cartone',
        'size' => 'medium',
    ],
];

foreach ($newData as $newProduct) {
    try {
        //GENERO UN ERRORE NEL PREZZO DEL NUOVO PRODOTTO

        // aggiungo l'istanza all'array solo se non avvengono delle eccezioni
        $products[] = new Toy($newProduct['title'], $newProduct['price'], $newProduct['image'], $newProduct['category'], $newProduct['material'], $newProduct['size']);
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }
}
