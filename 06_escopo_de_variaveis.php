<?php
// Escopo global (fora da função)
$nome = "Devair";

function exibirNome()
{
    global $nome;
    echo $nome;
}

exibirNome();
echo "<hr>";

// Escopo local (somente dentro da função)
function exibirCidade()
{
    global $cidade;
    $cidade = "São José do Rio Preto";
}

exibirCidade();
echo $cidade;
echo "<hr>";

// Escopo global (outra forma)

$a = 1;
$b = 3;
$c = 7;

function soma()
{
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
