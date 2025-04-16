<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../maratona6//css//style.css" type="text/css">
    
</head>
<body>

<h1>Peças de carros</h1>
<div class="a2">

 <a href="http://localhost/maratona6/carro.php">Modelos de carros</a>

<a href="http://localhost/maratona6/aluno.php">Notas dos Alunos</a>
</div>

<form method="POST">
    <label for="acessorios">Qual peça você precisa?</label>
    <select name="acessorios[]" multiple>
        <option value="escapamento">Escapamento</option>
        <option value="volante">Volante</option>
        <option value="banco">Banco</option>
        <option value="rodas">Rodas</option>
    </select>
    <br>
    <input type="submit" value="Mostrar Especificações">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["acessorios"])) {
        
        $especificacoes = [
            "escapamento" => "Melhora a saída dos gases e desempenho do motor.",
            "volante" => "Direção confortável e segura, disponível em couro e esportivo.",
            "banco" => "Banco de tecido ou couro com ajuste manual ou elétrico.",
            "rodas" => "Rodas de liga leve ou aço, tamanhos de 15 a 20 polegadas."
        ];
    
        echo "<h3>Especificações:</h3><ul>";
    
        foreach ($_POST["acessorios"] as $peca) {
            if (isset($especificacoes[$peca])) {
                echo "<li><strong>" . ucfirst($peca) . ":</strong> " . $especificacoes[$peca] . "</li>";
            }
        }
    
        echo "</ul>";
    }
    ?>
    <input type="submit" value="comprar">
</body>
</html>