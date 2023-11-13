<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO | Aula 004</title>
</head>

<body>
    <?php
    require_once('./classes/Caneta.php');

    $c1 = new Caneta('Bic', 0.7, 'Azul');
    $c1->setModelo("Bic");
    $c1->setPonta(0.5);

    echo "A caneta 1 é da marca {$c1->getModelo()}, tem a ponta {$c1->getPonta()} e de cor {$c1->getCor()}!";
    ?>
</body>

</html>