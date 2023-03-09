<?php

include("BiblioInterface.php");
include("Emprestimo.php");
include("Livros.php");
include("funcionarios.php");
include("Pessoas.php");

$book = new Livros(
    "É assim que começa",
    "Coolen Hoover"
);

$devolve = new Emprestimo(
    "28/02/2023",
    "14/03/2023"
);

?>