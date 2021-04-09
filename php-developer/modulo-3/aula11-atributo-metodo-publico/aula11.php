<?php

require_once 'Funcionario.php';

$funcionario = new Funcionario();
$funcionario->setNome('Cesar');
$funcionario->setSalario(5200);
echo $funcionario->verSalario();






