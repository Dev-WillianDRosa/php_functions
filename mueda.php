<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numLancamentos = $_POST['numerolancamentos'];

    function lancarmoeda()
    {
        return rand(0, 1) == 0 ? 'cara' : 'coroa'; /*rand determina minimo e máximo*/
    }

    function realizarlancamentos($numLancamentos) 
    { /* Função para realizar 'n°' lançamentos de moeda*/
        $cara = 0;
        $coroa = 0;

        for ($i = 0; $i < $numLancamentos; $i++) 
        {
            if (lancarmoeda() === 'cara') 
            {
                $cara++;
            } else 
            {
                $coroa++;
            }
        }

        $porcentagemCaras = ($cara / $numLancamentos) * 100;
        $porcentagemCoroas = ($coroa / $numLancamentos) * 100;

        return [$porcentagemCaras, $porcentagemCoroas];
    }

    // Lança a moeda e calcula a porcentagem
    list($porcentagemCaras, $porcentagemCoroas) = realizarlancamentos($numLancamentos); 

    echo '<h3>Resultados dos Lançamentos</h3>';
    echo '<p>Porcentagem de Caras: ' . number_format($porcentagemCaras, 2) . '%</p>';
    echo '<p>Porcentagem de Coroas: ' . number_format($porcentagemCoroas, 2) . '%</p>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançar Moeda</title>
</head>
<body>
    <h2>Lançamento de Moeda</h2>
    <form action="" method="POST">
        <label for="numerolancamentos">Quantos lançamentos deseja realizar?
            <input type="text" id="numerolancamentos" name="numerolancamentos" required min="1">
        </label>
        <button type="submit">Lançar Moeda</button>
    </form>
</body>
</html>
