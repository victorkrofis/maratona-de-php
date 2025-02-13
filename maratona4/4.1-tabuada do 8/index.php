<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>tabuada do 8</h2>
    <?php 
    $a = 8;
    while ($a <= 8) {
        for ($i=0; $i <= 10; $i++) { 
            echo "$a x $i = ".$a * $i;
            echo "<br>";           
        }
        echo "<br>";
        $a++;
    }
    ?>
</body>
</html>