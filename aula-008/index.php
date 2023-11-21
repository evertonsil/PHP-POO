<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 008</title>
</head>

<body>
    <?php
    require_once('./classes/Pessoa.php');
    require_once('./classes/Livro.php');

    $p[0] = new Pessoa('Pessoa 1', 21, 'M');
    $p[1] = new Pessoa('Pessoa 2', 43, 'F');
    $p[2] = new Pessoa('Pessoa 3', 40, 'M');

    $l[0] = new Livro('Titulo Livro 1', 'Autor Livro 1', 100, $p[0]);
    $l[1] = new Livro('Titulo Livro 2', 'Autor Livro 2', 250, $p[1]);
    $l[2] = new Livro('Titulo Livro 3', 'Autor Livro 3', 300, $p[2]);

    $l[1]->abrir();

    foreach ($l as $livro)
    {
        $livro->detalhes();
        echo "<hr>";
    }

    $p[0]->fazerAniver();
    ?>
    <script>
        // Mostrar o GIF
        document.getElementById("aniversarioGif").style.display = "block";

        // Ocultar o GIF após 5 segundos (5000 milissegundos)
        setTimeout(function () {
            document.getElementById("aniversarioGif").style.display = "none";
        }, 3000);
    </script>
</body>

</html>