<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>calculadora com desconto</h2>
    <?php 
    $original = 250;
    $desconto = 5 / 100;
    $total = $original - ($original * $desconto);

    $preco_formatado = number_format($total, 1, ',', '.');

    echo " o preço final é de $preco_formatado";
    ?>
</body>
</html>