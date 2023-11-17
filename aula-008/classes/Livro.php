<?php
require_once('Pessoa.php');
require_once('./interface/Publicacao.php');
class Livro implements Publicacao
{
    //Atributos
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Métodos especiais
    public function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotalPaginas($totalPaginas);
        $this->setLeitor($leitor->getNome());
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }
    public function getTotalPaginas() {
        return $this->totalPaginas;
    }
    public function setTotalPaginas($totalPaginas) {
        $this->totalPaginas = $totalPaginas;
        return $this;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
        return $this;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
        return $this;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
        return $this;
    }

    //Métodos
    public function detalhes() {

    }
    public function abrir() {
        $this->aberto = true;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($pagina) {
        if ($pagina >= $this->totalPaginas)
        {
            echo "Já está na última página!";
        } else
        {
            $this->pagAtual = $pagina;
            echo "Página atual:" . $this->pagAtual;
        }

    }
    public function avancarPag() {
        if ($this->pagAtual >= $this->totalPaginas)
        {
            echo "Já está na última página!";
        } else
        {
            $this->pagAtual++;
            echo "Página atual:" . $this->pagAtual;
        }

    }
    public function voltarPag() {
        if ($this->pagAtual <= 0)
        {
            echo "Você está na primeira página!";
        } else
        {
            $this->pagAtual--;
            echo "Página Atual" . $this->pagAtual;
        }
    }
}