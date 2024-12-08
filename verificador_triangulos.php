<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lado1 = $_POST['num1'];
    $lado2 = $_POST['num2'];
    $lado3 = $_POST['num3'];

    function Ladodotriangulo($lado1, $lado2, $lado3)
    {
        if (($lado1 > abs($lado2 - $lado3) && $lado1 < ($lado2 + $lado3)) &&
            ($lado2 > abs($lado1 - $lado3) && $lado2 < ($lado1 + $lado3)) &&
            ($lado3 > abs($lado1 - $lado2) && $lado3 < ($lado1 + $lado2))
        ) {
            return true;
        } else {
            return false;
        }
    }
    if (Ladodotriangulo($lado1, $lado2, $lado3)) {
        echo 'Triangulo Verdadeiro';
    } else {
        echo 'Triangulo Falso, Não é um triangulo';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="num1">Primeiro Lado:
            <input type="text" name="num1" id="num1" step="any" required>
        </label>

        <label for="num2">Segundo Lado:
            <input type="text" name="num2" id="num2" step="any" required>
        </label>

        <label for="num3">Terceiro Lado:
            <input type="text" name="num3" id="num3" step="any" required>
        </label>

        <button type="submit">Calcular</button>
    </form>
</body>

</html>