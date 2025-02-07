<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>combinando dois arrays</h2>
    <?php 
    $impares = [1, 3, 5, 7, 9];
    $pares = [2, 4, 6, 8];
    $numero = array_merge($impares, $pares);
    echo "agora as duas arrays estao juntas";
    print_r($numero);
    sort($numero);
    echo "<br>";
    echo "array apos coordenar os valores";
    print_r($numero);
    ?>
</body>
</html>