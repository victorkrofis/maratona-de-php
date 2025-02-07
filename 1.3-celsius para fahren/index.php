<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>celsius para fahren</title>
</head>
<body>
    <h2>celsius para Fahren</h2>
    <?php 
    $celsius = 40;
    $fahren = ($celsius * 9/5) + 32;

    echo "celsius para Fahren " . $celsius . " é igual a " . $fahren;

    ?>
</body>
</html>