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
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome          = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade         = $idade;
        $this->altura        = $altura;
        $this->peso          = $peso;
        $this->vitorias      = $vitorias;
        $this->derrotas      = $derrotas;
        $this->empates       = $empates;
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
        $this->setCategoria();
        return $this;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function setCategoria() {
        if ($this->peso < 52.2)
        {
            $this->setCategoria = "Inválido";
        } else if ($this->peso <= 70.3)
        {
            $this->setCategoria = "Leve";
        } else if ($this->peso <= 83.9)
        {
            $this->setCategoria = "Médio";
        } else if ($this->peso <= 120.2)
        {
            $this->setCategoria = "Pesado";
        } else
        {
            $this->setCategoria = "Inválido";
        }
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
        echo "<br>Nome:" . $this->getNome();
        echo "<br>Nacionalidade:" . $this->getNacionalidade();
        echo "<br>Idade:" . $this->getIdade();
        echo "<br>Altura:" . $this->getAltura();
        echo "<br>Peso:" . $this->getPeso();
        echo "<br>Categoria:" . $this->getCategoria();
        echo "<br>Vitórias:" . $this->getVitorias();
        echo "<br>Derrotas:" . $this->getDerrotas();
        echo "<br>Empates:" . $this->getEmpates();
    }
    public function status() {
        echo "<br>Nome:" . $this->getNome();
        echo "<br>Categoria:" . $this->getCategoria();
        echo "<br>Vitórias:" . $this->getVitorias();
        echo "<br>Derrotas:" . $this->getDerrotas();
    }
    public function ganharLuta() {
        $vitorias = $this->getVitorias();
        $this->setVitorias($vitorias + 1);
    }
    public function perderLuta() {
        $derrotas = $this->getDerrotas();
        $this->setDerrotas($derrotas + 1);
    }
    public function empatarLuta() {
        $empates = $this->getEmpates();
        $this->setEmpates($empates + 1);
    }
}
