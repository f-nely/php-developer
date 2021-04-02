<?php

include_once('conexao.php');

// ler as tabelas
$result_tabela = "SHOW TABLES";
$resultado_tabela = mysqli_query($conn, $result_tabela);

while ($row_tabela = mysqli_fetch_row($resultado_tabela)) {
    $tabela[] = $row_tabela[0];
}

var_dump($tabela);