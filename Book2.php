<?php

class Book2 {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getBook2(){
        return $this->titulo;
    }
}

?>