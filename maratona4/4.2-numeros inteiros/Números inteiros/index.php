<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Inteiros</title>
</head>
<body>
    <h1>Números Inteiros</h1>
    <p>Este programa lê 10 números inteiros do usuário e calcula a média.</p>
    
  <?php
 
 $numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}

$soma = 0;
echo "Os números são: " . implode(", ", $numeros) . "<br>";

for ($i = 0; $i < 10; $i++) {
    $soma += $numeros[$i];
}

$media = $soma / 10;

echo "A média dos números digitados é: " . $media . "<br>";

  ?>
    
</body>
</html>