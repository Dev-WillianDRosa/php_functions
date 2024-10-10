<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numero1 = $_POST['numero'];

    function contarnumeros ($numero1)
    {
        return strlen((string)$numero1); /*função strlen é para contar os caracteres*/
    }

    function Inverternumeros($numero1)
    {
        $numeroinvertido = strrev((string)$numero1); /* função strrev é para inverter os caracteres*/
        return $numeroinvertido;
    }
    echo 'o numero de digitos é de ' . contarnumeros($numero1) . '<br><br>';;
    echo'O numero ao Contrário é ' . Inverternumeros($numero1) . '<br><br>';;
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverter os Numeros</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">Digite um Numero:
        <input type="text" name="numero" id="numero" autofocus step="any" required>
        </label>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>