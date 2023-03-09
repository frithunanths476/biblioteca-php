<?php

class Funcionarios extends Pessoas implements BiblioInterface {

    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }

    public function listarDados() {
        echo "O Nome é : " . $this->getNome() . " <br>";
        echo "A idade é :" . $this->getIdade() . " <br>";
    }
}

?>