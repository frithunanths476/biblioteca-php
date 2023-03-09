<?php

class Emprestimo extends Book implements BiblioInterface {
    public function __construct($emprestimo, $devolucao) {
        parent::__construct($emprestimo, $devolucao);
    }

    public function listarDados(){
        echo "A data de emprestimo é : " . $this->getEmprestimo() . "<br>";
        echo "A data de devolução é : " . $this->getDevolucao() . "<br>";
    }
   
}
     

?>