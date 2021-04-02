<?php

include_once('conexao.php');

// ler as tabelas
$result_tabela = "SHOW TABLES";
$resultado_tabela = mysqli_query($conn, $result_tabela);

while ($row_tabela = mysqli_fetch_row($resultado_tabela)) {
    $tabelas[] = $row_tabela[0];
}

//var_dump($tabelas);

$result = "";
foreach($tabelas as $tabela) {
    //echo $tabela . '<br>';
    //pesquisar o nome das colunas
    $result_colunas = "SELECT * FROM ".$tabela;
    $resultado_colunas = mysqli_query($conn, $result_colunas);
    $num_colunas = mysqli_num_fields($resultado_colunas);
    //echo $tabela . " - " . $num_colunas . "<br>";

    //cria a instrução para apagar a tabela caso a mesma exista
    $result .= 'DROP TABLE IF EXISTS '.$tabela.';';

    //pesquisar como a coluna é criada
    $result_cr_col = "SHOW CREATE TABLE " .$tabela;
    $resultado_cd_col = mysqli_query($conn, $result_cr_col);
    $row_cr_col = mysqli_fetch_row($resultado_cd_col);
    //var_dump($row_cd_col);
    $result .= "\n\n".$row_cr_col[1] . ";\n\n";
}

echo $result;