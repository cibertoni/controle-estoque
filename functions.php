<?php
$produtos = [];
$produtos[] = [
    "nome" => "Camiseta Stark",
    "preco" => 50.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];
$produtos[] = [
    "nome" => "Calça Lannister",
    "preco" => 80.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];
$produtos[] = [
    "nome" => "Moletom Targeryan",
    "preco" => 180.99,
    "estoque" => 10,
    "min" => 20,
    "status" => true 
];
$produtos[] = [
    "nome" => "Tenis Maneiro",
    "preco" => 380.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];
$produtos[] = [
    "nome" => "Calça Moletom",
    "preco" => 80.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];
$produtos[] = [
    "nome" => "Patinete de Empreendedor Hipster",
    "preco" => 80.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];
function totalProduto ($produtoPreco, $produtoEstoque)
{
    $total = $produtoPreco * $produtoEstoque;
    return $total;
}
function totalEstoque()
{
    global $produtos;
    $soma = 0;
    foreach ($produtos as $key => $produto) {
        $soma = $soma + totalProduto($produto['preco'], $produto['estoque']);
    }
    return $soma;
}

function carregaProdutos(){
    $arquivoProdutos = "produtos.json";
    if (file_exists($arquivoProdutos)){
        $jsonProdutos = file_get_contents($arquivoProdutos);
        $arrayProdutos = json_decode($jsonProdutos, true);
        //teste se arrayProduto === false. se for
        //use o json_last_error_msg para imprimir msg
        // de erro na tela.
        return $arrayProdutos["produtos"];
    }
}
  // var_dump($produtos);