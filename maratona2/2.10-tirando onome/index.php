<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>removendo o elemento</h2>
    <?php 
     $array = [1, 2, 3, 4, 5];
     echo "array original ";
     print_r($array);
     unset($array[1]);
     echo "<br>";
     echo "array apos remover o valor no indice 2";
     print_r($array);
     $array = array_values($array);
     echo "<br>";
     echo " array apos reorganizar os elementos: ";
     print_r($array);

    ?>
</body>
</html>