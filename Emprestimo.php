<?php

class Emprestimo extends Pessoas implements BiblioInterface {
    public function __construct($emprestimo, $devolucao) {
        parent::__construct($emprestimo, $devolucao);
    }
}
     

?>