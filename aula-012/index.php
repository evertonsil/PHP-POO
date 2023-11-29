<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Polimorfismo</title>
</head>
<?php
require_once('./classes/Ave.php');
require_once('./classes/Mamifero.php');
require_once('./classes/Peixe.php');
require_once('./classes/Reptil.php');

require_once('./classes/Arara.php');
require_once('./classes/Cachorro.php');
require_once('./classes/Canguru.php');
require_once('./classes/Cobra.php');
require_once('./classes/Goldfish.php');
require_once('./classes/Tartaruga.php');

$ave      = new Ave();
$mamifero = new Mamifero();
$peixe    = new Peixe();
$reptil   = new Reptil();

$ave->setPeso(2.9);
$ave->setIdade(4);
$ave->setMembros(2);
$ave->setCorPena('Azul');

$mamifero->setPeso(35);
$mamifero->setIdade(25);
$mamifero->setMembros(4);
$mamifero->setCorPelo('Preto');

$peixe->setPeso(2.4);
$peixe->setIdade(12);
$peixe->setMembros(0);
$peixe->setCorEscama('Dourado');

$reptil->setPeso(6);
$reptil->setIdade(33);
$reptil->setMembros(4);
$reptil->setCorEscama('Verde');

$arara     = new Arara();
$cachorro  = new Cachorro();
$canguro   = new Canguru();
$cobra     = new Cobra();
$goldfish  = new Goldfish();
$tartaruga = new Tartaruga();


$cachorro->setCorPelo('Branco');
$cachorro->setIdade(7);
$cachorro->setRaca('Husk');


echo '<p>Sobreposição - Mostrando a diferença do resultado do método locomover(), entre reptil e tartaruga</p>';
$reptil->locomover();
$tartaruga->locomover();

echo '<p>Sobreposição - Mostrando a diferença do resultado do método emitirSom(), entre mamifero e cachorro</p>';
$mamifero->emitirSom();
$cachorro->emitirSom();


$frases_cachorro = array(
    "positivas" => array(
        "bom_garoto" => "Bom garoto!",
        "fofo" => "Você é tão fofo!",
        "adoro" => "Adoro quando você está por perto!",
        "melhor_amigo" => "Você é o melhor amigo que alguém poderia ter.",
        "inteligente" => "Que cachorrinho inteligente!"
    ),
    "negativas" => array(
        "nao_bagunce" => "Não faça bagunça!",
        "pare_roer" => "Pare de roer isso!",
        "bagunceiro" => "O que você fez aí? Bagunceiro!",
        "conversar" => "Precisamos conversar sobre o tapete destruído.",
        "nao_subir" => "Não, não pode subir na cama!"
    )
);

$tipo_frase      = array_rand($frases_cachorro);
$frase_escolhida = $frases_cachorro[$tipo_frase][array_rand($frases_cachorro[$tipo_frase])];

$cachorro->reagirFrase($frase_escolhida, $tipo_frase);

date_default_timezone_set('America/Sao_Paulo');
$hora_atual = date("H:i");

$cachorro->reagirHora($hora_atual);
$cachorro->reagirDono(true);
$cachorro->reagirIdadePeso(2, 3);

?>

<body>

</body>

</html>