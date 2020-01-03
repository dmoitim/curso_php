<?php

// Igual
if (10 == 10) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Não igual
if (10 != 11) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Identidade (verifica inclusive tipo)
if (10 === "10") :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Não idêntico
if (10 !== "10") :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Diferente
if (10 <> 10) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Menor que
if (10 < 0) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Maior que
if (10 > 30) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Menor ou igual a
if (10 <= 10) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Maior ou igual a
if (10 >= 10) :
    echo "Positivo";
else :
    echo "Negativo";
endif;

echo "<hr>";

// Spaceship: retorna 3 valores
var_dump(20 <=> 30); // Esquerdo menor, retorna -1
echo "<br>";
var_dump(20 <=> 20); // Iguais, retorna 0
echo "<br>";
var_dump(20 <=> 10); // Direito menor, retorna 1
