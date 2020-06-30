<?php

$a = 30;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

// Um sinal de igual apenas atribui valor, pois 1 sinal de igual é um Operador de Atribuição.

var_dump($a = $b);

echo "<br>";

// Dois sinais de igual é um Operador de Comparação (de valor, não de tipo)

//var_dump($a == $b);

//echo "<br>";

// Três sinais de igual é um Operador de Igualdade de Identidade

//var_dump($a === $b);



// Sinal de diferente.

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

echo "<br>";

?>