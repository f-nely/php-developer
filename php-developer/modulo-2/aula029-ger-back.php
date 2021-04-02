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

    //percorrer o array de colunas
    for ($i = 0; $i < $num_colunas; $i++) { 
        //ler o valor de cada coluna no banco de dados
        while ($row_tp_col = mysqli_fetch_row($resultado_colunas)) {
            //var_dump($row_tp_col);
            //criar a instrução da query para inserir os dados
            $result .= 'INSERT INTO '.$tabela. ' VALUES (';

            //ler os dados da tabela
            for ($j = 0; $j < $num_colunas; $j++) { 
                //addslashes - adiciona barras invertidas a uma string 
                $row_tp_col[$j] = addslashes($row_tp_col[$j]);
                //str_replace - substitui todas as ocorrências da string \n pelo \\n
                $row_tp_col[$j] = str_replace("\n", "\\n",$row_tp_col[$j]);

                if (isset($row_tp_col[$j])) {
                    if (!empty($row_tp_col[$j])) {
                        $result .= '"'.$row_tp_col[$j].'"';
                    } else {
                        $result .= 'NULL';
                    }
                } else {
                    $result .= 'NULL';
                }

                if ($j < ($num_colunas - 1)) {
                    $result .= ',';
                }
            }
            $result .= ");\n";
        }
    }
    $result .= "\n\n";
}

//echo $result;

//criar o diretório de backup
$diretorio = 'backup/';
if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
    chmod($diretorio, 0777);
}