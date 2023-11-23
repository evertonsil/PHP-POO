<?php

class Aluno extends Pessoa
{
    //Atributos
    private $matricula;
    private $curso;
    private $statusMatricula;

    //Métodos especiais
    public function getStatusMatricula() {
        return $this->statusMatricula;
    }
    public function setStatusMatricula($statusMatricula) {
        $this->statusMatricula = $statusMatricula;
        return $this;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }

    //Métodos
    public function cancelarMatricula() {
        $this->setStatusMatricula(false);
        echo "<br>A matricula {$this->getMatricula()} foi cancelada!";
    }
}