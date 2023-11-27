<?php
require_once('Mamifero.php');
class Cachorro extends Mamifero {
    private $raca;

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
        return $this;
    }
}
