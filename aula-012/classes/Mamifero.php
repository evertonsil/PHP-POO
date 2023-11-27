<?php
require_once('Animal.php');
class Mamifero extends Animal {
    private $corPelo;

    public function locomover() {
        echo "<p>Correndo</p>";
    }
    public function alimentar() {
        echo "<p>O mamífero se alimenta pela amamentação!</p>";
        echo "<p>Mamando...</p>";
    }
    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }


    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
        return $this;
    }
}