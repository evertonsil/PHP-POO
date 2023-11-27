<?php
require_once('Animal.php');
class Reptil extends Animal {
    private $corEscama;

    public function locomover() {
        echo "<p>Rastejando...</p>";
    }
    public function alimentar() {
        echo "<p>Os répteis se alimentam de insetos</p>";
        echo "<p>Comendo inseto...</p>";
    }
    public function emitirSom() {
        echo "<p>Som de réptil!</p>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
        return $this;
    }
}