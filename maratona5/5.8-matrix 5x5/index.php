<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <?php 
    function gerarMatrizAleatoria($linhas, $colunas){
        $matriz = [];
        for ($i = 0; $i < $linhas; $i++){
            $linha = [];
            for ($j = 0; $j < $colunas; $j++){
                $linha[] = rand(0, 50);
            }
            $matriz[] = $linha;
        }
        return $matriz;
    }
    
    function encontrarMaiorNumero($matriz){
        $maiorNumero = $matriz[0][0];
        $posicao = ['linha' => 0, 'coluna' => 0];

        foreach ($matriz as $i => $linha){
            foreach ($linha as $j => $numero){
                if ($numero > $maiorNumero){
                    $maiorNumero = $numero;
                    $posicao = ['linha' => $i, 'coluna' => $j];
                }
            }
        }
        return ['maiorNumero' => $maiorNumero, 'posicao' => $posicao];
    }
    $matriz5x5 = gerarMatrizAleatoria(5,5);
    $resultado = encontrarMaiorNumero($matriz5x5);

    echo "Matriz: <br>";
    foreach ($matriz5x5 as $linha){
        echo implode("",$linha) . "<br>";
    }

    echo "<br>Maior número: " . $resultado['maiorNumero'] . "<br>";
    echo "Posição: linha " . $resultado['posicao']['linha'] . ", Coluna" . $resultado['posicao']['coluna'] . "<br>";
    
    ?>    
</body>
</html>