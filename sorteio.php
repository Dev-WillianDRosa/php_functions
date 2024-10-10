<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
    $numero = $_POST['numero'];
    $max = $_POST['maximo'];
    $min = $_POST['minimo'];

    function sorteionumeros($max, $min)
    {
        return rand($max, $min);
    }

    echo 'O numero sorteado é ' . sorteionumeros($max, $min) . '<br> <br>';
    echo 'O numero que voce escolheu foi ' . $numero . '<br><br>';
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio Legal</title>
</head>

<body>
    <h2>Sorteio Divertido</h2>
    <form action="" method="POST">
        <label for="minimo">Mínimo:
            <input type="text" id="minimo" name="minimo" autofocus step="any" required><br><br>
        </label>
        <label for="maximo">Máximo:
            <input type="text" id="maximo" name="maximo" autofocus step="any" required><br><br>
        </label>
        <label for="numero">Digite um Numero:
            <input type="text" name="numero" id="numero" autofocus step="any" required><br><br>
        </label>
        <button type="submit">Calcular</button>

    </form>
</body>

</html>