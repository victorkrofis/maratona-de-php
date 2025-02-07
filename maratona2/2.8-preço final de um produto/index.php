<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>preço final de um produto</h2>
    <?php 
    $preco = 1000;
    $desconto = 30;

    function calcular_preco_final($preco, $desconto) {
        $desconto2 = 0;

        switch ($desconto) {
            case "10":
                $desconto2 = 0.10;
                break;
            case "20":
                $desconto2 = 0.20;
                break;
            case "30":
                $desconto2 = 0.30;
                break;
            default:
               $desconto2 = 0;
                break;
        } 
        $valor_com_descoto = $desconto2 * $preco;
        $preco_final = $preco - $valor_com_descoto;

        return $preco_final;
    } 
    $preco_final = calcular_preco_final($preco, $desconto);
    echo "o preço final do produto é: R$" . number_format($preco_final, 2, ',', '.');
   

    ?>
</body>
</html>