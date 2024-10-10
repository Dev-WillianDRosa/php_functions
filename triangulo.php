<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    function calculohipotenusa($num1, $num2)
    {
        if ($num1 >= 0 && $num2 >= 0) 
        {
            $hipotenusa = sqrt(pow($num1, 2) + pow($num2, 2));
            return number_format($hipotenusa, 2);
        } else
        {
            return false;
        }
    }
    $hipotenusa = calculohipotenusa($num1, $num2);

    if ($hipotenusa !== false) 
    {
        echo 'O resultado é ' . $hipotenusa;
    } else 
    {
        echo 'Os numeros devem ser Positivos';
    }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipotenusa</title>
</head>

<body>
    <form action="" method="POST">
        <label for="num1">Numero 1:
            <input type="text" name="num1" id="num1" step="any" required>
        </label>

        <label for="num2">Numero 2:
            <input type="text" name="num2" id="num2" step="any" required>
        </label>

        <button type="submit">Calcular</button>
    </form>
</body>

</html>