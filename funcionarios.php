<?php

class Funcionarios extends Pessoas implements BiblioInterface {

    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }
}

?>