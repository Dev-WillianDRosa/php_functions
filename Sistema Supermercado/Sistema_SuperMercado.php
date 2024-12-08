<?php

$produtos = [];

function Menu(){
    echo "== Sistema de SuperMercado ==\n";
    echo "1- Adicionar Produto\n";
    echo "2- Listar Produtos\n";
    echo "3- Atualizar Quantidade\n";
    echo "4- Remover Produto\n";
    echo "5- Sair\n";
}
function adicionar_produtos(&$produtos){
    $nome = readline("Digite o nome do Produto: " . PHP_EOL);
    $quantidade = readline("Digite a Quantidade: " . PHP_EOL);
    $produtos[$nome] = intval($quantidade);
    echo "Produto Adcionado com sucesso!\n";
}

function listar_produtos($produtos){
    if(empty($produtos)){
        echo "Nenhum Produto no Estoque.\n";
    }else{
        echo "== Lista de Produtos ==" . PHP_EOL;
        foreach($produtos as $nome => $quantidade){
            echo "$nome: $quantidade\n";
        }
    }
}
function atualizar_quantidade(&$produtos) { 
    $nome = readline("Digite o nome do produto a atualizar: "); 
    if (isset($produtos[$nome])) 
    { 
    $novaQuantidade = readline("Digite a nova quantidade: "); 
    $produtos[$nome] = intval($novaQuantidade); 
    echo "Quantidade atualizada com sucesso!\n"; 
} else{ 
    echo "Produto não encontrado.\n"; 
}
}

function deletar_produto(&$produtos){
    $nome = readline("Digite o Nome do Produto: " . PHP_EOL);
    if(isset($produtos[$nome])){
        unset($produtos[$nome]);
        echo "Produto removido.\n";
    }else{
        echo "Nenhum Produto encontrado\n";
    }
}
do{ // Executar pelo Menos uma vez.
    Menu();
    $opcao = readline();

    switch($opcao){
        case 1:
            adicionar_produtos($produtos);
        break;
        case 2:
            listar_produtos($produtos);
        break;
        case 3:
            atualizar_quantidade($produtos);
        break;
        case 4:
            deletar_produto($produtos);
        break;
        case 5:
            echo "Fim do Expediente\n";
        break;
        default:
        echo "Digite um comando verdadeiro.\n";
}
    echo "\n";
} while($opcao != 5);
?>
