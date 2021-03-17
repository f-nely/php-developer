<?php

$result = "2"; //$result é a string '2'

echo "Resultado exemplo um: " . $result . "<br>";

var_dump($result);

$result = $result + 1; //$result é o integer 2

echo "Resultado exemplo dois: " . $result;

var_dump($result);

$result = $result + 3.5; //$result tem o valor 3

echo "Resultado exemplo três: " . $result;

var_dump($result);

$result = 11; //$result tem o valor int 11
$result = (float) $result; //Depois da conversão o $result, será float 11.00
echo "Resultado exemplo quatro: " . $result;
var_dump($result);

$result = 7.9; //$result tem o valor 7.9
$result = (int) $result;
echo "Resultado exemplo cinco: " . $result;
var_dump($result);