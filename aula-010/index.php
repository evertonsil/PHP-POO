<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Herança</title>
</head>

<body>
    <?php

    require_once('./classes/Pessoa.php');
    require_once('./classes/Funcionario.php');
    require_once('./classes/Professor.php');
    require_once('./classes/Aluno.php');

    $p    = array();
    $p[0] = new Pessoa();
    $p[1] = new Funcionario();
    $p[2] = new Aluno();
    $p[3] = new Professor();

    $p[0]->setNome('Everton');
    $p[0]->setIdade(21);
    $p[0]->setSexo("M");

    $p[1]->setNome('Maria');
    $p[1]->setIdade(19);
    $p[1]->setSexo("F");
    $p[1]->setSetor("TI");
    $p[1]->setTrabalhando(true);

    $p[2]->setNome('João');
    $p[2]->setIdade(17);
    $p[2]->setSexo("M");
    $p[2]->setMatricula(01234);
    $p[2]->setStatusMatricula(true);
    $p[2]->setCurso("Informática");

    $p[3]->setNome('Paula');
    $p[3]->setIdade(49);
    $p[3]->setSexo("F");
    $p[3]->setEspecialidade("Exatas");
    $p[3]->setSalario(3800);


    foreach ($p as $pessoa)
    {
        var_dump($pessoa);
    }
    ?>
</body>

</html>