<?php

$a = 2;
$b = 4;
$c = 7;

$result = $a + $b;
echo "Soma: " . $result . "<br>";

$result = $b - $a;
echo "Subtração: " . $result . "<br>";

$result = $b * $a;
echo "Multiplicação: " . $result . "<br>";

$result = $b / $a;
echo "Divisão: " . $result . "<br>";

$result = $c % $a;
echo "Resto da divisão: " . $result . "<br>";

$result = $c / $a;
echo "Valor: R$" . number_format($result, 2, ',', '.');

