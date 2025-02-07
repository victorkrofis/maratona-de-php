<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>irmpar ou par</h2>
    <?php 
   $numero = 405;

   if ($numero % 2 == 0) {
       echo "$numero é um número par.";
   } elseif ($numero % 2 != 0) {
       echo "$numero é um número ímpar.";
   } else {
       echo "Valor inválido.";
   }
    
    ?>
</body>
</html>