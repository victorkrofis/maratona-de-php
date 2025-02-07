<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>preço dos ingressos com base no horario</h2>
    <?php 
    function calcular_preco_ingresso($hora) {
        if ($hora >= 10 && $hora < 12) {
            return 10.00; 
        } elseif ($hora >= 12 && $hora < 17) {
            return 20.00; 
        } elseif ($hora >= 17 && $hora < 22) {
            return 30.00; 
        } elseif ($hora >= 22 && $hora < 00) {
            return 40.00;
        } else {
            return "Horário inválido. O cinema funciona das 10h às 00h.";
        }
    }
    
    
    $hora_atual = 00; 
    $preco = calcular_preco_ingresso($hora_atual);
    echo "O preço do ingresso para a sessão das $hora_atual:00 é R$ $preco.";
    ?>
</body>
</html>