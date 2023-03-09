<?php

include("BiblioInterface.php");
include("Emprestimo.php");
include("Livros.php");
include("Pessoas.php");
include("Clientes.php");
include("Funcionarios.php");

$book = new Livros(
    "É assim que começa",
    "Coolen Hoover"
);

$devolve = new Emprestimo(
    "28/02/2023",
    "14/03/2023"
);



$cliente = new Clientes(
    "Giovanna",
    25
);

$funciaonarios = new Funcionarios(
    "Matheus",
    25
);

$cliente->listarDados();

$funciaonarios->listarDados();

?>