<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 005</title>
</head>

<body>
    <?php
    require_once('./classes/ContaBanco.php');
    $cb1 = new ContaBanco();
    $cb1->abrirConta("CC", "Everton", 1);
    var_dump($cb1);

    $cb1->depositar(10);

    $cb2 = new ContaBanco();
    $cb2->abrirConta("CP", "João", 2);
    var_dump($cb2);

    $cb2->depositar(20);
    $cb2->sacar(170);
    $cb2->depositar(400);
    $cb2->fecharConta();
    $cb2->sacar(390);
    $cb2->pagarMensal();
    $cb2->fecharConta();


    ?>
</body>

</html>