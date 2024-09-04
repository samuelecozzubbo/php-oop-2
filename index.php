<?php
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/data/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <h1 class="text-bg-success p-3">Movie List</h1>
            <?php foreach ($products as $produtc): ?>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>