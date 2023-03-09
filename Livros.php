<?php

class Livros extends Pessoas implements BiblioInterface {
    public function __construct($titulo, $autor) {
        parent::__construct($titulo, $autor);
    }
}
?>
    