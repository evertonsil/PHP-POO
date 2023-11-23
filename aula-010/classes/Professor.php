<?php

class Professor extends Pessoa
{
    //Atributos
    private $especialidade;
    private $salario;

    //Métodos especias
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
        return $this;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
        return $this;
    }

    //Métodos
    public function receberAum($valor) {
        if ($this->getSalario())
        {
            $this->setSalario($this->getSalario() + $valor);
            echo "<br>O(a) professor(a) receber um aumento de {$valor} reais. Seu novo salário é de R$ {$this->getSalario()}";
        } else
        {
            echo "O(a) professor(a) {$this->getNome()} ainda não tem um salário atribuído!";
        }
    }
}