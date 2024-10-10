<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
    $numero = $_POST['numero'];

    function verifica($numero)
    {
        return $numero % 2 == 0 ? 1 : 0;
    }
    $resultado = verifica($numero);
    if ($resultado == 1) {
        echo $numero . ' é Par';
    } else {
        echo $numero . ' é impar';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>será impar ou par?</h2>
    <form action="" method="POST">
        <label for="numero">Digite um número inteiro:
            <input type="text" id="numero" name="numero" required>
        </label>
        <button type="submit">Verificar</button>
    </form>
</body>

</html>