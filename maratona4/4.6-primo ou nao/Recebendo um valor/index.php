<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um Número é Primo</title>
</head>
<body>
    <h1>Verificar se um Número é Primo</h1>

    <!-- Formulário para o usuário digitar o número -->
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    // Função que verifica se o número é primo
    function eh_primo($n) {
        if ($n <= 1) {
            return false; // Números menores ou iguais a 1 não são primos
        }
        for ($i = 2; $i <= sqrt($n); $i++) { // Verifica até a raiz quadrada de n
            if ($n % $i == 0) {
                return false; // Se for divisível por algum número, não é primo
            }
        }
        return true; // Se passar por todo o loop, é primo
    }

    // Verifica se o formulário foi enviado e chama a função
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if (eh_primo($numero)) {
            echo "<p>$numero é um número primo!</p>";
        } else {
            echo "<p>$numero não é um número primo.</p>";
        }
    }
    ?>

</body>
</html>
