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

var_dump($ave);
var_dump($mamifero);
var_dump($peixe);
var_dump($reptil);

$arara     = new Arara();
$cachorro  = new Cachorro();
$canguro   = new Canguru();
$cobra     = new Cobra();
$goldfish  = new Goldfish();
$tartaruga = new Tartaruga();


$cachorro->setCorPelo('Branco');
$cachorro->setIdade(7);
$cachorro->setRaca('Husk');

$tartaruga->locomover();

var_dump($cachorro);
var_dump($tartaruga);

// $ave->fazerNinho();
// $ave->locomover();
// $ave->alimentar();
// $ave->emitirSom();

// $mamifero->locomover();
// $mamifero->alimentar();
// $mamifero->emitirSom();

// $peixe->locomover();
// $peixe->alimentar();
// $peixe->emitirSom();
// $peixe->soltarBolha();
?>

<body>

</body>

</html>