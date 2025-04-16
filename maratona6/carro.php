<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../maratona6//css//style.css" type="text/css">
</head>
<body>
    <h1>Modelos de carros</h1>
   <div class="a2">
    <a href="http://localhost/maratona6/pe%c3%a7as.php">pecas de carros</a>

   <a href="http://localhost/maratona6/aluno.php">Notas dos Alunos</a>
</div>

<form method="POST">
        <label for="carroSelect">Selecione um carro:</label>
        <select name="carroSelect">
            <option value="">Escolha um carro</option>
            <option value="banshee">Banshee</option>
            <option value="uno">Uno</option>
            <option value="ford">Ford</option>
        </select>
        <button type="submit">Ver Detalhes</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["carroSelect"])) {
        $selecionado = $_POST["carroSelect"];

        $detalhes = [
            "banshee" => ["modelo" => "Banshee", "ano" => 1986, "cor" => "Branco", "preco" => 1100000],
            "uno" => ["modelo" => "Uno", "ano" => 1995, "cor" => "Vermelho", "preco" => 15000],
            "ford" => ["modelo" => "Ford", "ano" => 2000, "cor" => "Preto", "preco" => 30000]
        ];

        if (isset($detalhes[$selecionado])) {
            $carro = $detalhes[$selecionado];
            echo "<h3>Detalhes do carro selecionado:</h3>";
            echo "<p><strong>Modelo:</strong> {$carro['modelo']}</p>";
            echo "<p><strong>Ano:</strong> {$carro['ano']}</p>";
            echo "<p><strong>Cor:</strong> {$carro['cor']}</p>";
            echo "<p><strong>Preço:</strong> R$ " . number_format($carro['preco'], 2, ',', '.') . "</p>";
        }
    }
    ?>

<footer>
</footer>
</body>
</html>