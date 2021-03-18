<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Switch</title>
</head>
<body>
    <?php 
        $a = 3;

        switch($a) {
            case 1:
                echo "Sacar Dinheiro";
                break;
            case 2:
                echo "Depositar Dinheiro";
                break;
            case 3:
                echo "Imprimir Cheque";    
                break;
            default:
                echo "Opção não encontrada";
                break;    
        }
    ?>
</body>
</html>