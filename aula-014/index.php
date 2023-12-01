<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 014 - Projeto Final</title>
</head>

<body>
    <?php
    require_once('./classes/Video.php');
    require_once('./classes/Gafanhoto.php');
    require_once('./classes/Visualizacao.php');

    $v[0] = new Video('Aula 001');
    $v[1] = new Video('Aula 002');
    $v[2] = new Video('Aula 003');

    $g[0] = new Gafanhoto('Everton', 21, 'M', 'evertonsil');

    $view[0] = new Visualizacao($g[0], $v[0]);

    $view[0]->avaliarNota(8);

    var_dump($v);
    var_dump($g);
    var_dump($view);
    ?>
</body>

</html>