<?php
require_once('Pessoa.php');
class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade() {
        echo "<br><p>Mensalidade do aluno {$this->getNome()} paga com sucesso!</p>";
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
}