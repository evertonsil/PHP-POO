<?php
require_once('Animal.php');
class Peixe extends Animal {
    private $corEscama;

    public function soltarBolha() {
        echo "🫧🫧🫧...";
    }
    public function locomover() {
        echo "<p>Nadando...</p>";
    }
    public function alimentar() {
        echo "<p>Os peixes se alimentam de pequenos frutos do mar!</p>";
        echo "<p>Comendo frutos do mar...</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz um som específico!</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
        return $this;
    }
}