<?php 
// echo "entrei no arquivo functions"


$produtos = []; //atribbuir um array (vazio) pra tag php//
$produtos[] = [
    "nome" => "Camiseta Vingadores", 
    "preco" => 50.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Blusa X-men", 
    "preco" => 50.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Calça Stark", 
    "preco" => 50.99,
    "estoque" => 10,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Tênis Lannister", 
    "preco" => 50.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "óculos gatinho", 
    "preco" => 50.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];
function totalProduto($produtoPreco, $produtoEstoque){ //chamar total do produto//
 
        $total = $produtoPreco * $produtoEstoque;
        return $total;
    }

function totalEstoque(){ //chamar o total do estoque//
    global $produtos;
    $soma = 0;
    
    foreach ($produtos as $key => $produto){
        $soma = $soma + $totalProduto($produto['preco'], $produto['estoque']);
    }
        return $soma;
}
// echo "<pre>";
