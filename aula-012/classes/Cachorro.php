<?php
require_once('Mamifero.php');
class Cachorro extends Mamifero {
    private $raca;

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
        return $this;
    }

    public function emitirSom() {
        echo "<p>Au! Au! Au! 🐕</p>";
    }

    public function reagirFrase($frase, $tipo_frase) {
        echo "<p>$frase - ";
        if($tipo_frase == 'positivas')
        {
            echo "Abanar e latir 🐶</p>";
        } else
        {
            echo "Rosnar 😠</p>";
        }
    }
    public function reagirHora($hora) {
        echo "<p>$hora - ";
        if($hora < 12)
        {
            echo "Abanar!</p>";
        } else
        {
            echo "Ignorar</p>";
        }
    }
    public function reagirDono($dono) {
        echo $dono ? "<p>É meu dono - " : "<p>Não é meu dono - ";
        if($dono)
        {
            echo "Abanar 🐶</p>";
        } else
        {
            echo "Rosnar e latir 😠</p>";
        }
    }
    public function reagirIdadePeso($idade, $peso) {
        echo "<p>$idade anos - $peso kg - ";
        if($idade <= 4 && $peso <= 5)
        {
            echo "Brincar de morder e latir</p>";
        } else
        {
            echo "Latir</p>";
        }
    }
}
