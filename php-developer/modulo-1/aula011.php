<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>IF ... eleseif ... else</title>
</head>
<body>
    <?php 
      $a = 2;
      if ($a == 2) {
          echo "Depositar dinheiro";
      } elseif ($a == 1) {
          echo "Sacar dinheiro";
      } else {
          echo "Opção não encontrada";
      }
    ?>
</body>
</html>