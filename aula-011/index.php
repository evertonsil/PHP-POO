<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
</head>

<body>
    <?php
    require_once('./classes/Aluno.php');
    require_once('./classes/Bolsista.php');
    require_once('./classes/Pessoa.php');
    require_once('./classes/Visitante.php');

    $a1 = new Aluno();
    $a1->setNome("João");
    $a1->setIdade(21);
    $a1->setSexo("M");
    $a1->setMatricula(1234);
    $a1->setCurso("Matemática");

    $b1 = new Bolsista();
    $b1->setNome("Maria");
    $b1->setIdade(25);
    $b1->setSexo("F");
    $b1->setMatricula(4567);
    $b1->setCurso('Nutrição');
    $b1->setBolsa(50);
    $b1->pagarMensalidade();

    $v1 = new Visitante();
    $v1->setNome("Marcos");
    $v1->setIdade(32);
    $v1->setSexo("M");

    var_dump($a1);
    var_dump($b1);
    var_dump($v1);
    ?>
</body>

</html>