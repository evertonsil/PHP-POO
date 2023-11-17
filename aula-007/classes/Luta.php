<?php
require_once('Lutador.php');
class Luta
{
    //Atrivbutos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos especiais
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        return $this;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
        return $this;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
        return $this;
    }
    public function getAprovada() {
        return $this->aprovada;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
        return $this;
    }

    //Métodos
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2)
        {
            $this->setAprovada(true);
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);

            echo "Luta marcada \o/<br>";
            echo "O desafiante é " . $this->getDesafiante()->getNome() . " contra o desafiado " . $this->getDesafiado()->getNome() . "\n";
            echo "<br>It's time!!!";
        } else
        {
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }
    public function lutar() {
        if ($this->aprovada)
        {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vitoria = rand(0, 2);

            switch ($vitoria)
            {
                case 0:  //empate
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    echo "<br><br><strong>A luta empatou!</strong>";
                    break;
                case 1:  //vitoria do lutador1
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    echo "<br><br><strong>" . $this->getDesafiado()->getNome() . " venceu a luta!</strong>";
                    break;
                case 2:  //vitoria do lutador2
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    echo "<br><br><strong>" . $this->getDesafiante()->getNome() . " venceu a luta!</strong>";
                    break;
                default:
            }

            //Chama métodos de status dps lutadores após a luta
            $this->getDesafiado()->status();
            $this->getDesafiante()->status();
        } else
        {
            echo "A luta não cumpre os requisitos necessários para acontecer!";
        }
    }
}