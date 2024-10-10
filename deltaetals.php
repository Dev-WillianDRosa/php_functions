<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    function calculodedelta($a, $b, $c)
    {
        if ($a == 0 || $b == 0 || $c == 0) {
            return false;
        } else {
            return pow($b, 2) - (4 * $a * $c);
        }
    }
    function calculodeX1($a, $b, $delta)
    {
        if ($delta < 0) {
            return false;
        } else {
            return (-$b + sqrt($delta)) / (2 * $a);
        }
    }
    function calculodeX2($a, $b, $delta)
    {
        if ($delta < 0) {
            return false;
        } else {
            return (-$b - sqrt($delta)) / (2 * $a);
        }
    }
    $delta = calculodedelta($a, $b, $c);

    if ($delta < 0) {
        echo "A equação não possui raízes reais.";
    } else {
        $x1 = calculodeX1($a, $b, $delta);
        $x2 = calculodeX2($a, $b, $delta);

        echo "Delta: " . $delta . "<br>";
        echo "x1: " . $x1 . "<br>";
        echo "x2: " . $x2 . "<br>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delta e Tals</title>
</head>

<body>
    <form action="" method="POST">
        <label for="a">Valor de A:
            <input type="text" name="a" id="a" step="any" required>
        </label>

        <label for="b">Valor de B:
            <input type="text" name="b" id="b" step="any" required>
        </label>

        <label for="c">Valor de C:
            <input type="text" name="c" id="c" step="any" required>
        </label>

        <button type="submit">Calcular</button>
    </form>
</body>

</html>