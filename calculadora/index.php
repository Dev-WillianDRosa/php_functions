<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>

    <link rel="stylesheet" href="estilizar.css"> <!-- puxando arquivo css externo, mesma coisa que por neste arquivo ou nn -->

</head>

<body>
    <div class="calculadora"> <!-- abre div calculadora -->
        <div class="nomecalculadora">
            <h1 class="nomecalculadora">CALCULADORA</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- vai enviar as informação de volta pra mesma pagina, pois há php-->

            <input class="numero" type="number" name="num1" placeholder="Numero 1"><br>
            <input type="radio" name="operacao" value="+" required>Somar<br><!-- tipo radio é para o usuario escolher apenas uma operação -->
            <input type="radio" name="operacao" value="-" required>Subtração<br>
            <input type="radio" name="operacao" value="*" required>Multiplicação<br><!-- name=operacao, uma expressão com varios varios valores -->
            <input type="radio" name="operacao" value="/" required>Divisão<br>
            <input class="numero" type="number" name="num2" placeholder="Numero 2"><br><br> <!-- placeholder é pra deixar de fundo uma mensagem -->

            <button type="submit">RESULTADO</button> <!-- botão de enviar -->

        </form>
        <div class="resultado"><!-- abre div resultado -->
            <h2>
                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if responsavel por verificar se o formulário é post 

                    $n1 = $_POST['num1'];
                    $n2 = $_POST['num2'];
                    $operacao = $_POST['operacao']; // variavel para a expressão de multiplos valores a ser comparada

                    switch ($operacao) { //switch é como se fosse um if, a condição ira avaliar a mesma variavel, mas com valores diferentes
                        case '+': //caso escolhido fazer a conta de mais
                            $resultado = $n1 + $n2;
                            break;

                        case '-': //caso escolhido fazer a conta de menos
                            $resultado = $n1 - $n2;
                            break; // break é pra parar o caso, se não usar break vai continuar pros proximos casos

                        case '*':
                            $resultado = $n1 * $n2;
                            break;

                        case '/':
                            if ($n2 == 0) { //vai avaliar se a segunda caixa de dialogo é igual a 0
                                $resultado = "Não é possivel dividir por zeroo";
                            } else { // se não for, faz a conta tranquilo
                                $resultado = $n1 / $n2;
                            }
                            break;
                    }
                    echo "resultado é de " . $resultado; // mesmo resultado do o que por em cada caso, pois está dentro do if 
                }

                ?>
            </h2>
        </div><!-- fecha div calculadora -->
    </div> <!-- fecha div resultado -->
</body>

</html>