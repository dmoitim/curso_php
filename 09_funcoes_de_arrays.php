<?php

$nomes = array("Devair", "Ana", "Bianca");

// Verifica se a variável é um array
if (is_array($nomes)) {
    echo "<p>É um array.</p>";
} else {
    echo "<p>NÃO é um array.</p>";
}

// Verifica se um valor existe no array
if (in_array("Devair", $nomes)) {
    echo "<p>Está no array.</p>";
} else {
    echo "<p>NÃO está no array.</p>";
}

$nomesComChaves = array("Pai" => "Devair", "Filha1" => "Ana", "Filha2" => "Bianca");

// Retorna um novo array com as chaves do array passado como parâmetro
$keys = array_keys($nomesComChaves);
print_r($keys);
