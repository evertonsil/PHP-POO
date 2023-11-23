<?php

class Funcionario extends Pessoa
{
    //Atributos
    private $setor;
    private $trabalhando;

    //Métodos especiais
    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
        return $this;
    }
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
        return $this;
    }

    //Métodos
    public function mudarStatusTrabalho() {
        $this->setTrabalhando(true);
        echo "<br>O funcionário {$this->getNome()} agora está trabalhando no setor {$this->getSetor()}";
    }
    public function mudarSetor($s) {
        $this->setSetor($s);
        echo "<br>O setor do funcionário {$this->getNome()} foi alterado para {$this->getSetor()}";
    }
}