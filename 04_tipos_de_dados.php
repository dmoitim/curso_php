<?php

/********* Escalares *********/
// String
$nome = "Devair!";
var_dump($nome);

if (is_string($nome)) :
    echo "<p>Variável nome é string.</p>";
else :
    echo "<p>Variável nome NÃO é string.</p>";
endif;

echo "<hr>";

// Int
$idade = 35;
var_dump($idade);

if (is_int($idade)) :
    echo "<p>Variável idade é int.</p>";
else :
    echo "<p>Variável idade NÃO é int.</p>";
endif;

echo "<hr>";

// Float
$altura = 1.81;
var_dump($altura);

if (is_float($altura)) :
    echo "<p>Variável altura é float.</p>";
else :
    echo "<p>Variável altura NÃO é float.</p>";
endif;

echo "<hr>";

// Boolean
$admin = false;
var_dump($admin);

if (is_bool($admin)) :
    echo "<p>Variável admin é bool.</p>";
else :
    echo "<p>Variável admin NÃO é bool.</p>";
endif;

echo "<hr>";

/********* Compostos *********/

// Array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);

if (is_array($carros)) :
    echo "<p>Variável carros é array.</p>";
else :
    echo "<p>Variável carros NÃO é array.</p>";
endif;

echo "<hr>";

// Object
class Cliente
{
    public $nome;

    public function atribuirNome($nome)
    {
        $this->nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("DevA");
var_dump($cliente);

if (is_object($cliente)) :
    echo "<p>Variável cliente é object.</p>";
else :
    echo "<p>Variável cliente NÃO é object.</p>";
endif;

echo "<hr>";

/********* Especiais *********/
$cidade = null;
var_dump($cidade);

if (is_null($cidade)) :
    echo "<p>Variável cidade é null.</p>";
else :
    echo "<p>Variável cidade NÃO é null.</p>";
endif;
