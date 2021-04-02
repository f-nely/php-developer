<?php

include_once('conexao.php');

// ler as tabelas
$result_tabela = "SHOW TABLES";
$resultado_tabela = mysqli_query($conn, $result_tabela);

while ($row_tabela = mysqli_fetch_row($resultado_tabela)) {
    $tabelas[] = $row_tabela[0];
}

//var_dump($tabelas);

foreach($tabelas as $tabela) {
    //echo $tabela . '<br>';
    //pesquisar o nome das colunas
    $result_colunas = "SELECT * FROM ".$tabela;
    $resultado_colunas = mysqli_query($conn, $result_colunas);
    $num_colunas = mysqli_num_fields($resultado_colunas);
    //echo $tabela . " - " . $num_colunas . "<br>";
}