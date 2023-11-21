<?php

class Pessoa
{
    //Atributos
    private $nome;
    private $idade;
    private $sexo;

    //Métodos especiais
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
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
        echo
            '<div id="aniversarioGif" style="position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); display: none;">
                <img src="./assets/gifs-de-balao-11.gif" alt="Aniversário do Livro" style="width: 100%;">
            </div>';
        $this->setIdade($this->getIdade() + 1);
        echo "Feliz aniversário " . $this->getNome() . "!";
        echo " Hoje você faz " . $this->getIdade() . " anos.";
    }
}