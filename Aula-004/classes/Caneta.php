<?php
class Caneta
{
    private $cor;
    private $modelo;
    private $ponta;
    private $tampada;

    public function __construct($m, $p, $c) {
        $this->modelo  = $m;
        $this->ponta   = $p;
        $this->cor     = $c;
        $this->tampada = true;
    }

    public function tampar() {
        $this->tampada = true;
    }
    public function getCor() {
        return $this->cor;
    }
    public function setCor($c) {
        $this->cor = $c;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}
?>