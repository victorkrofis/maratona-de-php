<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>real pro dolar</h2>
    <?php 
    $real = 150;
    $dolar = 5.86;
    $calculo = $real * $dolar;

   $preco_formatado = number_format($calculo, 2, ',', '.');
   
    echo " 50 reais sao aproximadamente " .  $preco_formatado ." dolares"; 
    ?>
</body>
</html>