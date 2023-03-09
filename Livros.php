<?php

class Livros extends Book implements BiblioInterface {
    public function __construct($titulo, $autor) {
        parent::__construct($titulo, $autor);
    }

    public function listarDados() {
        echo "O livro pego foi : " . $this->getBook() . "<br>";
    }
}
?>
    