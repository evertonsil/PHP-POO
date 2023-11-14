<?php
class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Metodos especiais
    public function __construct() {

    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
        return $this;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        return $this;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
        return $this;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
        return $this;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
        return $this;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($empates) {
        $this->empates = $empates;
        return $this;
    }

    //Metodos
    public function apresentar() {

    }
    public function status() {

    }
    public function ganharLuta() {

    }
    public function perderLuta() {

    }
    public function empatarLuta() {

    }
}
