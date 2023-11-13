<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Caneta tampada, impossível rabiscar!";
        } else {
            echo "Rabiscando...";
        }
    }

    public function tampar()
    {
        if ($this->tampada != true) {
            $this->tampada = true;
        } else {
            echo "A caneta já está tampada!";
        }
    }
    public function destampar()
    {
        if ($this->tampada == true) {
            $this->tampada = false;
        } else {
            echo "A caneta já está destampada!";
        }
    }
}
?>