<?php
require_once('Aluno.php');
class Bolsista extends Aluno {
    private $bolsa;

    //Sobreposição do método da classe Aluno
    public function pagarMensalidade() {
        echo "<br><p>{$this->getNome()} é bolsista! Então paga com desconto! Total de {$this->getBolsa()}% de desconto!";
    }
    public function renovarBolsa() {

    }

    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
        return $this;
    }
}