<?php

class Book {
    private $emprestimo;
    private $devolucao;

    public function __construct($emprestimo, $devolucao) {
        $this->emprestimo = $emprestimo;
        $this->devolucao = $devolucao;
    }

    public function getBook(){
        return $this->titulo;
    }

    public function getEmprestimo() {
        return $this->emprestimo;
    }

    public function getDevolucao() {
        return $this->devolucao;
    }
}

?>