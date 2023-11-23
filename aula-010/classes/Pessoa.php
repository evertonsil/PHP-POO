<?php

class Pessoa
{
    //Atributos
    private string $nome;
    private int $idade;
    private string $sexo;

    //Métodos Especiais
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

    //Métodos
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
        echo "<br>Parabéns {$this->getNome()} pelo seu aniversário de {$this->getidade()}";
    }
}