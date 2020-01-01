<?php
// Arrays numéricos
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

// Arrays associativos
$pessoa = array("nome" => "Devair", "idade" => 35, "altura" => 1.81);
echo $pessoa["nome"] . "<br>";
echo $pessoa["idade"] . "<br>";
echo $pessoa["altura"] . "<br>";
print_r($pessoa);

echo "<br>";

$pessoa["cidade"] = "São José do Rio Preto";
print_r($pessoa);

echo "<br>";
echo "<br>";

foreach ($pessoa as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}

echo "<hr>";

// Arrays multidimensionais
$times = array(
    "cariocas" => array("Vasco", "Flamengo", "Botafogo"),
    "paulistas" => array("Santos", "São Paulo", "Palmeiras"),
    "baianos" => array("Bahia", "Vitória", "Itabuna")
);

print_r($times);

echo "<br>";

foreach ($times as $indice => $valor) {
    echo "<h3>$indice</h3>";
    echo "<ul>";
    foreach ($valor as $time) {
        echo "<li>$time</li>";
    }
    echo "</ul>";
}
