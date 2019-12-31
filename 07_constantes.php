<?php
// Constantes são GLOBAIS
define("NOME", "Devair");
define("IDADE", 35);
var_dump(NOME);
var_dump(IDADE);

echo "<hr>";

echo "Meu nome é " . NOME . " e minha idade é " . IDADE . ".";

echo "<hr>";

define("TIMES", ["Sao Paulo", "New Orleans Saints"]);
var_dump(TIMES);

echo "<hr>";

function exibirNome()
{
    echo NOME;
}

exibirNome();
