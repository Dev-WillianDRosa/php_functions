<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numeros = $_POST['numeros'];

    if (!empty($numeros)) {
        $arrayNumeros = array_map('intval', explode(',', $numeros));
        function somaarray($array)
        {
            $soma = 0;
            foreach ($array as $numero) {
                $soma += $numero;
            }
            return $soma;
        }

        $resultado = somaarray($arrayNumeros);
        echo "A soma dos elementos do array é: " . $resultado;
    } else {
        echo "Por favor, insira números válidos.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Elementos de um Array</title>
</head>

<body>
    <h1><strong>Soma Array</strong></h1>
    <form action="" method="POST">
        <label for="numeros">Insira os números separados por vírgula:</label>
        <input type="text" id="numeros" name="numeros" placeholder="1,2,3,4" required>
        <button type="submit"><strong>Calcular Soma</strong></button>
    </form>
</body>

</html>