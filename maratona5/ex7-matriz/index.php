<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       // Gerar a matriz 3x3 com números aleatórios entre 1 e 100
$matriz = array();//criando a matriz
$numeros = array();
for ($i = 0; $i < 3; $i++) {//percorrendo as linhas da matriz
    for ($j = 0; $j < 3; $j++) {//percorrendo as colunas da matriz
        $matriz[$i][$j] = rand(1, 100); // Gerando número aleatório entre 1 e 100
        $numeros[] = $matriz[$i][$j];
    }
}

echo "Os números são: " . implode(", ", $numeros) . "<br>";

     $soma = 0;//variavel para armazenar a soma dos elementos da matriz  
    for ($i = 0; $i < 3; $i++) {//percorrendo as linhas da matriz
        for ($j = 0; $j < 3; $j++) {//percorrendo as colunas da matriz
            $soma += $matriz[$i][$j];//somando os elementos da matriz
        }
    }
 
echo "<br>";
 
    echo "A soma é : " . $soma;
 

    ?>
</body>
</html>