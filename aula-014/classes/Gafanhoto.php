<?php
require_once('Pessoa.php');
class Gafanhoto extends Pessoa {
    private $login;
    private $totalAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo); //chama o contrutor da classe mãe
        $this->setLogin($login);
        $this->setTotalAssistido(0);

    }
    public function viuMaisUm() {
        $this->setTotalAssistido($this->getTotalAssistido() + 1);
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    public function getTotalAssistido() {
        return $this->totalAssistido;
    }

    public function setTotalAssistido($totalAssistido) {
        $this->totalAssistido = $totalAssistido;
        return $this;
    }
}