<?php

$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br>";

$resultado2 = (10 + 3) / 2;

echo $resultado2;

echo "<br>";

// && significa "e"

$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump ($resultado3);

echo "<br>";

// || significa "ou"

$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 20;

var_dump ($resultado4);

?>
