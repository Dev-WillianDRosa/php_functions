<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Potenciação</title>
</head>
<body>
    <h1><strong>Calculadora de Potenciação</strong></h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="base"><strong>Insira a Base:</strong>
            <input type="number" id="base" name="base" step="any" placeholder="Digite a Base" required>
        </label><br><br>
        <label for="expoente"><strong>Insira o Expoente:</strong>
            <input type="number" id="expoente" name="expoente" step="any" placeholder="Digite o Expoente" required>
        </label><br><br>
        <button type="submit"><strong>Calcular</strong></button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $expoente = $_POST["expoente"];

        function calculopotencia($base, $expoente) {
            $resultado = pow($base, $expoente);
            echo "<p><strong>O resultado da potência é: " . sprintf('%.2f', $resultado) . "</strong></p>";
        }

        calculopotencia($base, $expoente);
    }
    ?>
</body>
</html>
