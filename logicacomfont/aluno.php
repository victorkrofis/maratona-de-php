<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../maratona6//css//aluno.css" type="text/css">
</head>
<body>
    <h1>Notas dos Alunos</h1>
    <div class="a2"><a href="http://localhost/maratona6/carro.php">Modelos de carros</a>
    <a href="http://localhost/maratona6/pe%c3%a7as.php">Peças de carros</a>
    </div>

<div class="botao2">
<form action="" method="POST">
    <div>
        <label for="nota">Nota:</label>
        <input type="text" name="nota">
    </div>
    <input type="submit" value="Enviar">
</form>
</div>

<div class="botao2">
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["nota"]) || !is_numeric($_POST["nota"])) {
        echo "Por favor, insira um valor numérico válido.";
    } else {
        $nota = floatval($_POST["nota"]);

        if ($nota < 0 || $nota > 10) {
            echo "A nota deve estar entre 0 e 10.";
        } elseif ($nota <= 4.9) {
            echo "Reprovado";
        } elseif ($nota >= 5 && $nota <= 6.9) {
            echo "Recuperação";
        } elseif ($nota >= 7 && $nota <= 8.9) {
            echo "Aprovado";
        } else {
            echo "Aprovado com distinção";
        }
    }
}
?>
</div>

</body>
</html>