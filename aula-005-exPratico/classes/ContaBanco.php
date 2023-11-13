<?php
class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Métodos Especiais
    public function __construct() {
        $this->status = false;
        $this->saldo  = 0;
    }

    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
        return $this;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($dono) {
        $this->dono = $dono;
        return $this;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    //Métodos específicos
    public function abrirConta($tipo, $dono, $numConta) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        $this->setDono($dono);
        $this->setNumConta($numConta);

        if ($tipo == 'CC')
        {
            $this->setSaldo(50);
        } else if ($tipo == 'CP')
        {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        $saldo    = $this->getSaldo();
        $numConta = $this->getNumConta();

        if ($saldo < 0)
        {
            echo '<br>Você precisa quitar suas dívidas antes de fechar a conta!';
        } else if ($saldo > 0)
        {
            echo "<br>Você ainda tem {$saldo} reais disponíveis na sua conta. Saque todo o valor antes de fechar!";
        } else
        {
            $this->setStatus(false);
            echo "<br>Sua conta {$numConta} foi fechada!";
        }


    }
    public function depositar($valor) {
        $status = $this->getStatus();
        $saldo  = $this->getSaldo();

        if ($status == true)
        {
            $this->setSaldo($saldo + $valor);
            echo "<br>Depósito de {$valor} reais realizado com sucesso. Seu saldo atual é de {$this->getSaldo()}";
        } else
        {
            echo "<br>Falha ao realizar depósito. No momento sua conta encontra-se fechada!";
        }


    }
    public function sacar($valor) {
        $status = $this->getStatus();
        $saldo  = $this->getSaldo();

        if ($status == true)
        {
            if ($valor > $saldo)
            {
                echo "<br>Você não pode sacar mais que {$saldo} reais! Por favor tente sacar um valor menor.";
            } else
            {
                $this->setSaldo($saldo - $valor);
                echo "<br>Saque de {$valor} reais efetuado com sucesso. Seu saldo atual é de {$this->getSaldo()}";
            }
        } else
        {
            echo "<br>Falha ao realizar saque. No momento sua conta encontra-se fechada!";
        }

    }
    public function pagarMensal() {
        $saldo = $this->getSaldo();
        $tipo  = $this->getTipo();

        if ($tipo == "CC")
        {
            $this->setSaldo($saldo - 12);
            echo "<br>Pagamento de 12 reais referente a tarifa mensal, pago com sucesso! Seu saldo atual é de {$this->getSaldo()}";
        } else if ($tipo == "CP")
        {
            $this->setSaldo($saldo - 20);
            echo "<br>Pagamento de 20 reais referente a tarifa mensal, pago com sucesso! Seu saldo atual é de {$this->getSaldo()}";
        }
    }
}
?>