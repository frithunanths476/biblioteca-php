<?php

include("BiblioInterface.php");
<<<<<<< HEAD
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
=======
include("Pessoas.php");
include("Clientes.php");
include("Funcionarios.php");

$cliente = new Clientes(
    "Giovanna";
    25;
)

$funciaonarios = new Funcionarios(
    "Matheus";
    25;
)
>>>>>>> 103c61352639ec41fa1a96f49caaf202fe92ed4c

?>