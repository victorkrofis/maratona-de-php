<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>categorias dos estudantes</h2>
    <?php 
   $nota = 10;
   switch (true) {
    case (is_numeric($nota) && $nota < 4.9):
        echo "reprovado";
        break;
    case (is_numeric($nota) && $nota >= 5 && $nota <= 6.9):
        echo "recuperaçao";
        break;
    case (is_numeric($nota) && $nota >= 7 && $nota <= 10):
        echo "aprovado";
        break;
    
    default:
        echo "nota não identificada";
        break;
   }
    
    ?>
</body>
</html>