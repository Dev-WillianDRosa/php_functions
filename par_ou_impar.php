<?php
session_start();

function parouimpar()
{
    if (!isset($_SESSION['placar'])) 
    {
        $_SESSION['placar'] = ['usuário' => 0, 'computador' => 0];
    }

    $jogadaJogador = null;
    $jogadaComputador = null;
    $soma = null;
    $resultado = '';
    $ganhador = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['jogada'])) 
    {
        $jogadaJogador = $_POST['jogada'];
        $jogadaComputador = rand(0, 10);
        $soma = (int)$jogadaJogador + $jogadaComputador;
        $resultado = $soma % 2 === 0 ? 'Par' : 'Ímpar';
        $ganhador = ($resultado === 'Par' && $jogadaJogador === '0') || ($resultado === 'Ímpar' 
        && $jogadaJogador === '1') ? 'Você' : 'Computador';

        if ($ganhador === 'Usuário') 
        {
            $_SESSION['placar']['você']++;
        } else 
        {
            $_SESSION['placar']['Máquina']++;
        }
    }

    return [$jogadaJogador, $jogadaComputador, $soma, $resultado, $ganhador];
}

list($jogadaJogador, $jogadaComputador, $soma, $resultado, $ganhador) = parouimpar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Jogo Par ou Ímpar</title>

<body>
    </head>
    <h1>Jogo Par ou Ímpar</h1>
    <form action="" method="POST">
        <label>Inicie o Jogo:
            <select name="jogada" required>
                <option value="0">Par</option>
                <option value="1">Ímpar</option>
            </select>
        </label>
        <button type="submit">Jogar</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($jogadaJogador)): ?>
        <p>Você escolheu: <?php echo htmlspecialchars($jogadaJogador); ?></p>
        <p>Computador escolheu: <?php echo htmlspecialchars($jogadaComputador); ?></p>
        <p>Soma: <?php echo htmlspecialchars($soma); ?> - Resultado: <?php echo htmlspecialchars($resultado); ?></p>
        <p>Ganharam: <?php echo htmlspecialchars($ganhador); ?>!</p>
        <p>Placar: Você: <?php echo $_SESSION['placar']['você']; ?> - Computador: <?php echo $_SESSION['placar']['computador']; ?></p>
    <?php endif; ?>

    <form method="post">
        <button type="submit" name="reset" value="1">Reiniciar Placar</button>
    </form>
</body>

</html>