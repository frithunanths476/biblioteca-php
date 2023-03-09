<?php

include("BiblioInterface.php");
include("Book.php");
include("Emprestimo.php");
include("Pessoas.php");
include("Livros.php");
include("Clientes.php");
include("Funcionarios.php");

$titulo = new Livros(
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

$devolve->listarDados();

$titulo->listarDados();

?>