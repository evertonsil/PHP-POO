<?php
require_once('./interfaces/Controlador.php');
class ControleRemoto implements Controlador
{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos especiais
    public function __construct() {
        $this->volume  = 50;
        $this->ligado  = false;
        $this->tocando = false;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
        return $this;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
        return $this;
    }

    //Métodos abstratos da Interface
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setVolume(false);
    }
    public function abrirMenu() {
        $ligado  = $this->getLigado();
        $volume  = $this->getVolume();
        $tocando = $this->getTocando();

        echo "Está ligado?: " . ($ligado ? "SIM" : "NÃO");
        echo "<br>Está tocando?: " . ($tocando ? "SIM" : "NÃO");
        echo "<br>Volume: " . $volume;

        for ($i = 0; $i < $volume; $i += 10)
        {
            echo " |";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Menu fechado!";
    }
    public function maisVolume() {
        $volume = $this->getVolume();
        $ligado = $this->getLigado();

        if ($ligado)
        {
            $this->setVolume($volume + 5);
        } else
        {
            echo "<br>O aparelho está desligado!";
        }
    }
    public function menosVolume() {
        $volume = $this->getVolume();
        $ligado = $this->getLigado();

        if ($ligado)
        {
            $this->setVolume($volume - 5);
        }
    }
    public function ligarMudo() {
        $volume = $this->getVolume();
        $ligado = $this->getLigado();

        if ($ligado && $volume > 0)
        {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        $volume = $this->getVolume();
        $ligado = $this->getLigado();

        if ($ligado && $volume <= 0)
        {
            $this->setVolume(50);
        }
    }
    public function play() {
        $tocando = $this->getTocando();
        $ligado  = $this->getLigado();

        if ($ligado && !$tocando)
        {
            $this->setTocando(true);
        }
    }
    public function pause() {
        $tocando = $this->getTocando();
        $ligado  = $this->getLigado();

        if ($ligado && $tocando)
        {
            $this->setTocando(false);
        }
    }
}