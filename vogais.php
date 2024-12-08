<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $papalavra = $_POST['palavra'];

    function contarvogais($papalavra)
    {
        $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $contagem = 0;

        // Contando as vogais na palavra
        for ($i = 0; $i < strlen($papalavra); $i++) 
        {
            if (in_array($papalavra[$i], $vogais)) 
            {
                $contagem++;
            }
        }
        return $contagem;
    }
    $numerodasvogais = contarvogais($papalavra);
    echo 'O numero de vogais da palavra ' . $papalavra . ' ' . 'é de ' . $numerodasvogais;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem das vogais</title>
</head>

<body>
    <h2>vogais</h2>
    <form action="" method="POST">
        <label for="palavra">Palavra
            <input type="text" name="palavra" id="palavra"><br><br>
        </label>

        <button type="submit">Ver</button>
</body>

</html>