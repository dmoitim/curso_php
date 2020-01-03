<?php

$idade = 35;
$nome = "Devair";

// Operador "e": && ou AND
if ($idade === 35 && $nome === "Devair") :
    echo "Verdadeiro";
else :
    echo "Falso";
endif;

echo "<hr>";

// Operador "ou": || ou OR
if ($idade === 10 || $nome === "Devair") :
    echo "Verdadeiro";
else :
    echo "Falso";
endif;

echo "<hr>";

// Operador "ou exclusivo": XOR
// Ou é um, ou é outro, nao podem as duas condições serem verdadeiras
if ($idade === 35 xor $nome === "Devair") :
    echo "Verdadeiro";
else :
    echo "Falso";
endif;

echo "<hr>";

// Operador "negação": !
if (!$idade === 35) :
    echo "Verdadeiro";
else :
    echo "Falso";
endif;

echo "<hr>";
