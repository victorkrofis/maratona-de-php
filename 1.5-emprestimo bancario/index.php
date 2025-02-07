<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
</head>
<body>
    <h2>emprestimo</h2>
    <h4>emprestimo de 500 reais, 5% de juros, 12 vezes</h4>
    <?php 
    $emprestimo = 500;
    $juros = 1 + 5 / 100;
    $parcelas = 12;
    $calculo = $emprestimo * $juros / $parcelas;

    echo " o resultado é $calculo";
    ?>
    
</body>
</html>