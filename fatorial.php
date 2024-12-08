<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    function fatorial($numero)
    {
        if ($numero < 0) 
        {
            return null;
        }
        $resultado = 1;
        for ($i = 2; $i <= $numero; $i++) 
        {
            $resultado *= $i;
        }
        return $resultado;
    }

    $resultado = fatorial($numero);

    if ($resultado !== null) 
    {
        echo "$numero = $resultado";
    } else {
        echo "Número negativo não tem fatorial.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Fatorial</title>
</head>

<body>
    <h2>Cálculo do Fatorial</h2>
    <form action="" method="POST">
        <label for="numero">Digite um número inteiro:
            <input type="number" id="numero" name="numero" required min="0">
        </label>
        <button type="submit">Calcular Fatorial</button>
    </form>
</body>

</html>