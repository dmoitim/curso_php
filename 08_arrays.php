<?php
$carros = array("BMW", "Veloster", "Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);

echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);

echo "<hr>";

$clientes = ["Ana", "Bianca", "Devair"];
print_r($clientes);

echo "<hr>";

// Conta os elementos de um array
echo count($carros);
echo "<br>";
echo count($motos);
echo "<br>";
echo count($clientes);
echo "<br>";

echo "<hr>";

// Loop no array
foreach ($carros as $valor) {
    echo $valor . "<br>";
}

echo "<br>";

foreach ($motos as $valor) {
    echo $valor . "<br>";
}

echo "<br>";

foreach ($clientes as $valor) {
    echo $valor . "<br>";
}

echo "<hr>";
