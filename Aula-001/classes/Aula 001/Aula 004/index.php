<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO | Aula 004</title>
</head>

<body>
    <pre>
    <?php
    require_once('/classes/Caneta.php');

    $c1 = new Caneta($m, $p);
    $c1->setModelo("Bic");
    $c1->setPonta(0.5);

    var_dump($c1);
    ?>
    </pre>
</body>

</html>