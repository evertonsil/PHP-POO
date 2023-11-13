<?php
class Garrafa
{
    //setando os ATRIBUTOS da classe
    public $medida;
    public $medidaMax;
    private $cor;
    protected $tampada;
    protected $termica;

    //setando MÉTODOS da classe
    private function encher($quantidade)
    {
        if ($this->medida < $this->medidaMax) {
            $this->medida = $this->medida + $quantidade;
            echo 'Medida atual da garrafa: ' . $this->medida . '<br>';
        } else {
            echo 'A garrafa já está em sua capacidade máxima!<br>';
        }
    }


    private function esvaziar($quantidade)
    {
        if ($this->medida > 0) {
            $this->medida = $this->medida - $quantidade;
            echo 'Medida atual da garrafa: ' . $this->medida . '<br>';
        } else {
            echo 'A garrafa ja está vazia!';
        }
    }

    public function tampar()
    {
        if ($this->tampada == true) {
            echo 'A garrafa já está tampada!';
        } else {
            $this->tampada = true;
            echo 'Garrafa tampada!';
        }
    }

    public function destampar()
    {
        if ($this->tampada == true) {
            $this->tampada = false;
            echo 'Garrafa destampada!';
        } else {
            echo 'A garrafa já está destampada';
        }
    }
}

?>