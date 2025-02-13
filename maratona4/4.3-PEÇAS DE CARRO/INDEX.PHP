<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Peças de carros</H1>
    <?php 
    $array = ["volante", "para choque", "para brisa", "rodas", "antena", "radio", "placa", "porta", "motor", "freio"];
    echo "peças de carros";
    
    foreach ($array as $array) {
        echo $array . "<br>";
    }
    ?>
</body>
</html>