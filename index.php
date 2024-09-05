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
            <h1 class="text-bg-success p-3">Product list</h1>
            <?php foreach ($products as $product): ?>
                <div class="card col-4">
                    <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
                        <h6 class="card-subtitle"><?php echo $product->price ?>&euro;</h6>
                        <p><?php echo 'Categoria' . $product->category->name . '<br>'; ?></p>
                        <?php if ($product->type == 'food'): ?>
                            <div>
                                <?php
                                echo 'Peso: ' . $product->weight . 'kg<br>';
                                echo 'Data di scadenza: ' . $product->expirationDate;
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($product->type == 'toy'): ?>
                            <div>
                                <?php
                                echo 'Materiale: ' . $product->material . '<br>';
                                echo 'Dimensione: ' . $product->size;
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>