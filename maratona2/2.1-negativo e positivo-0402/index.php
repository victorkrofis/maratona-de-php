<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificando se o numero é positivo ou negativo</title>
</head>
<body>
<h2>numeros negativos ou positivos </h2>
    <?php 
    $numero = -2;
    if ($numero > 0){
        echo "o seu numero é positivo";
    } 
    else if 
    ($numero < 0) {
        echo "o seu numero é negativo";} 
    else if
    ($numero == 0){
        echo "o seu numero é zero";
    }
    ?>
</body>
</html>