<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>tem idade para votar</h2>
    <?php 
    $idade = 20;
    if ($idade <= 15) {
        echo "nao pode votar";
    } elseif ($idade >= 16 && $idade <= 17) {
        echo "voto opcional";
    } elseif ($idade >= 18) {
        echo "voto obrigatorio";
    }
    ?>
</body>
</html>