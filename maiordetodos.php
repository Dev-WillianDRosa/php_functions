<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['numero'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];

    function Maiorzinhodetodos($num1, $num2, $num3)
    {
        return max($num1, $num2, $num3); /*função max = máximo*/
    }
    $numeroMaiior = Maiorzinhodetodos($num1, $num2, $num3);
    echo 'entre os numeros ' . $num1 . ' ' . $num2 . ' ' . $num3 . ' ' . 'o maior é ' . $numeroMaiior;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior de todos</title>
</head>

<body>
    <form action="" method="post">
        <label for="numero">Digite um Numero:
            <input type="text" name="numero" id="numero" autofocus step="any" required><br><br>
        </label>

        <label for="numero2">Digite um Numero:
            <input type="text" name="numero2" id="numero2" autofocus step="any" required><br><br>
        </label>

        <label for="numero3">Digite um Numero:
            <input type="text" name="numero3" id="numero3" autofocus step="any" required><br><br>
        </label>

        <button type="submit">ver qual e o Maior</button>
    </form>
</body>

</html>