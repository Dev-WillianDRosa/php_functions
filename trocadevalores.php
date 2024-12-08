<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];

    function trocaDeValores(&$num1, &$num2)
    {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }

    echo 'Os valores antes da troca: ' . '<br><br>';
    echo 'Valor 1: ' . $num1 . '<br>';
    echo 'Valor 2: ' . $num2 . '<br><br>';

    trocaDeValores($num1, $num2);

    echo 'Depois da troca: ' . '<br><br>';
    echo 'Valor 1: ' . $num1 . '<br>';
    echo 'Valor 2: ' . $num2 . '<br>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de Valores</title>
</head>

<body>
    <h2>Troca de Valores</h2>
    <form action="" method="POST">
        <label for="numero1">Número 1:
            <input type="number" name="numero1" id="numero1" required>
        </label><br><br>
        <label for="numero2">Número 2:
            <input type="number" name="numero2" id="numero2" required>
        </label><br><br>
        <button type="submit">Trocar</button>
    </form>
</body>

</html>