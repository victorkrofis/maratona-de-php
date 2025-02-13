<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados de um gato</title>
</head>
<body>
<?php
// Cria um array associativo com dados de um gato
$gato = array(
    "nome" => "Paçoca",
    "idade" => "7 meses", 
    "cor" => "Branco / Cinza",
    "raça" => "Persa",
    "peso" => "2.5 kg"
);

// Utiliza o foreach para imprimir os dados do gato de forma personalizada
foreach ($gato as $chave => $valor) {
    if ($chave == "nome") {
        echo "O nome do gato é: " . $valor . "<br>";
    } elseif ($chave == "peso") {
        echo "O peso do gato é: " . $valor . "<br>";
    } elseif ($chave == "idade") {
        echo "A idade do gato é: " . $valor . "<br>";
    } elseif ($chave == "cor") {
        echo "A cor do gato é: " . $valor . "<br>";
    } elseif ($chave == "raça") {
        echo "A raça do gato é: " . $valor . "<br>";
    }
}
?>
</body>
</html>
