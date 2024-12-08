<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    function Soma($num1, $num2)
    {
        return $num1 . $num2;
    }
    echo 'O valor da Soma é ' . Soma($num1, $num2) . '<br> <br>';
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos trequinho</title>
</head>

<body>
    <h2>Soma</h2>
    <form action="" method="POST">
        <label for="num1">Numero 1
            <input type="text" name="num1" id="num1"><br><br>
        </label>

        <label for="num2">Numero 2
            <input type="text" name="num2" id="num2"><br><br>
        </label>

        <button type="submit">Calcula</button>
    </form>
</body>

</html>