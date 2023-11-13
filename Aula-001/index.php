<?php require_once("./classes/Garrafa.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>

<body>
    <?php
    //instanciando ao objeto a partir da classe
    $g1 = new Garrafa;
    $g1->cor = "Prata";
    $g1->medida = 500;
    $g1->medidaMax = 1000;
    $g1->tampada = true;
    $g1->termica = true;

    $c1 = new Caneta;
    $c1->modelo = "BIC";
    $c1->cor = "Azul";
    $c1->ponta = 0.7;
    $c1->carga = 90;
    $c1->tampada = true;
    ?>
</body>

</html>