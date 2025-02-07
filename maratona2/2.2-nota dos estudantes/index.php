<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>notas dos estudantes</h2>
    <?php 
    $nota = 0;

    if ($nota <= 4.9) {
        echo "reprovado";
    } elseif ($nota >= 5 && $nota <= 6.9) {
        echo "recuperaçao";
    } elseif ($nota >= 7 && $nota <= 8.9) {
        echo "aprovado";
    } elseif ($nota >= 9 && $nota <= 10) {
        echo "aprovado com distinçao";
    }
    ?>
</body>
</html>