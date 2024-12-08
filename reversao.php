<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $palalvra = $_POST['palavra'];


    function reverter($palalvra)
    {
        $palavrainvertida = strrev((string)$palalvra);
        return $palavrainvertida;
    }

    echo 'a palavra invertida fica assim: ' . reverter($palalvra);
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reversão da palavra</title>
</head>

<body>
    <h2>palavras</h2>
    <form action="" method="POST">
        <label for="palavra">Palavra
            <input type="text" name="palavra" id="palavra"><br><br>
        </label>

        <button type="submit">Ver</button>
</body>

</html>