<?php

class Livros extends Book2 implements BiblioInterface {
    public function __construct($titulo, $autor) {
        parent::__construct($titulo, $autor);
    }

    public function listarDados() {
        echo "O livro pego foi : " . $this->getBook2() . "<br>";
    }
}
?>
    