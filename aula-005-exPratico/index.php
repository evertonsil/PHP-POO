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
    $cb1->abrirConta("CC", "Jubileu", 123456);
    var_dump($cb1);
    $cb1->depositar(300);
    $cb1->pagarMensal();

    $cb2 = new ContaBanco();
    $cb2->abrirConta("CP", "Creuza", 234567);
    var_dump($cb2);
    $cb2->depositar(500);
    $cb2->sacar(100);
    $cb2->pagarMensal();


    ?>
</body>

</html>