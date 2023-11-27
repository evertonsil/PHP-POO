<?php
require_once('Animal.php');
class Ave extends Animal {
    private $corPena;

    public function fazerNinho() {
        echo "<p>Contruindo ninho...!</p>";
    }
    public function locomover() {
        echo "<p>Voando</p>";
    }
    public function alimentar() {
        echo "<p>As aves se alimentam de frutos!</p>";
        echo "<p>Comendo frutos...</p>";
    }
    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
        return $this;
    }
}