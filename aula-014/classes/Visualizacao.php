<?php
require_once('Video.php');
require_once('Gafanhoto.php');
class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espec, $filme) {
        $this->setEspectador($espec);
        $this->setFilme($filme);

        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->viuMaisUm();
    }
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcentagem($porcentagem) {
        $nota = 0;
        if($porcentagem < 20)
        {
            $nota = 3;
        } else if($porcentagem <= 50)
        {
            $nota = 5;
        } else if($porcentagem <= 90)
        {
            $nota = 8;
        } else
        {
            $nota = 10;
        }
        $this->filme->setAvaliacao($nota);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
        return $this;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
        return $this;
    }
}