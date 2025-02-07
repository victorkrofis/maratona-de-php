<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>quantos numeros pares existem</h2>
    <?php 
    function contador_pares($array) {
        $contadores_pares = 0;

        foreach ($array as $numero) {
            if ($numero % 2 == 0) {
                $contadores_pares++;
            }
        }
        return $contadores_pares;
    }

   $array_numeros = array();
   for ($i=0; $i < 10 ; $i++) { 
    $array_numeros [] = rand(1, 100);
   }
   $quantidade_pares = contador_pares($array_numeros);

   echo "array de numeros " . implode(", ", $array_numeros) . "<br>";
   echo "a quantidade de numeros pares no array é: " . $quantidade_pares;
    ?>
</body>
</html>
