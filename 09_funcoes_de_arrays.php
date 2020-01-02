<?php

$nomes = array("Devair", "Ana", "Bianca");

// Verifica se a variável é um array
if (is_array($nomes)) {
    echo "<p>É um array.</p>";
} else {
    echo "<p>NÃO é um array.</p>";
}

echo "<hr>";

// Verifica se um valor existe no array
if (in_array("Devair", $nomes)) {
    echo "<p>Está no array.</p>";
} else {
    echo "<p>NÃO está no array.</p>";
}

echo "<hr>";

$nomesComChaves = array("Pai" => "Devair", "Filha1" => "Ana", "Filha2" => "Bianca");

// Retorna um novo array com as chaves do array passado como parâmetro
$keys = array_keys($nomesComChaves);
print_r($keys);

echo "<hr>";

// Retorna um novo array com os valores do array passado como parâmetro
$values = array_values($nomesComChaves);
print_r($values);

echo "<hr>";

// Agrega o conteúdo de dois arrays
$carros = ["Camaro", "Uno", "Gol"];
$motos = ["Pop100", "50cc", "CB1000"];

$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<hr>";

// Exclui a última posição do array
print_r($carros);

echo "<br>";

array_pop($carros);
print_r($carros);

echo "<hr>";

// Exclui a primeira posição do array
print_r($carros);

echo "<br>";

array_shift($carros);
print_r($carros);

echo "<hr>";
