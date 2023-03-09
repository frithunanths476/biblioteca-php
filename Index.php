<?php

include("BiblioInterface.php");
include("Pessoas.php");
include("Clientes.php");
include("Funcionarios.php");

$cliente = new Clientes(
    "Giovanna",
    25
);

$funciaonarios = new Funcionarios(
    "Matheus",
    25
);

?>