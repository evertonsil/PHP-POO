<?php
class Luta
{
    //Atrivbutos
    private $desafiado;
    private $desafiantes;
    private $rounuds;
    private $aprovada;

    //Métodos especiais
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        return $this;
    }
    public function getDesafiantes() {
        return $this->desafiantes;
    }
    public function setDesafiantes($desafiantes) {
        $this->desafiantes = $desafiantes;
        return $this;
    }
    public function getRounuds() {
        return $this->rounuds;
    }
    public function setRounuds($rounuds) {
        $this->rounuds = $rounuds;
        return $this;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
        return $this;
    }

    //Métodos
    public function marcarLuta() {

    }
    public function lutar() {

    }
}