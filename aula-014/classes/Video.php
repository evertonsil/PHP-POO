<?php
require_once('./interface/AcoesVideo.php');
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setReproduzindo(false);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
    }

    public function play() {
        $this->setReproduzindo(true);
    }
    public function pause() {
        $this->setReproduzindo(false);
    }
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao) {
        if($this->getViews() > 0)
        {
            $media           = ($this->avaliacao + $avaliacao / $this->getViews());
            $this->avaliacao = $media;
        }
        return $this;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
        return $this;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
        return $this;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }
}