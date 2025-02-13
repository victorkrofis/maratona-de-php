<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>compras</h1>
    <?php 
    $desconto = 15 / 100;
    $compra = 2250;

    $compravalor = number_format($compra, 0, ',', '.');
    echo "o valor da compra é de " . $compravalor . "<br> <br>";
    function desconto($compra, $desconto){
        return  $compra - $desconto * $compra ;
    }

    $resultado = desconto($compra, $desconto);

    $final = number_format($resultado, 1, ',', '.');
    echo "o valor com desconto é " . $final;

    ?>
</body>
</html>