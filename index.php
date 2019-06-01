<?php
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

// echo "<pre>";

$soma = 0; 
foreach ($produtos as $key => $produto) { //laço de repetição//
    $produtos[$key]["total"] = $produto["preco"] * $produto["estoque"];
    $soma = $soma + $produtos[$key]["total"];

// var_dump($produto);
}

// var_dump($produtos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
.vermelho td{
    background-color: #fdb8b8;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de estoque</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
    <header class="container">
    <h1>Controle de estoque</h1>
    </header>
    <main class="container">
    <table class="table table-striped">
    <thead> <!--linha principal da lista de preços-->
    <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Qtd Mínima</th>
    <th>Status</th>
    <th>Total</th>
    </tr>
    </thead>
    <tbody>


        <?php
        foreach ($produtos as $indice => $valor) { //chamar o php//
            // if ($valor ["estoque"] < $valor ["min"]) {
            //     $class ="vermelho";
            // }else{
            //     $class = "";
            // }

            $class = ($valor ["estoque"] < $valor ["min"]) ? "vermelho" : ""; //if ternário da operação acima//

            echo "<tr class='$class'>";
            echo "<td>". $valor["nome"] ."</td>";
            echo "<td> R$". $valor["preco"] ."</td>"; //ja vai concatenar com valor R$//
            echo "<td>". $valor["estoque"] ."</td>";
            echo "<td>". $valor["min"] ."</td>";
            echo "<td>". ($valor["status"] ? "Ativo" : "Desativado") ."</td>"; //se o status for verdade / pergunte, imprima ativo : ao contrario desativado//
            echo "<td> R$". $valor["total"] ."</td>";
            echo "</tr>";
        }

        ?>

<!-- 
    <tr>
    <td>Camiseta</td> // preenchimento da lista / tabela
    <td>R$50</td>
    <td>100</td>
    <td>20</td>
    <td>Ativo</td>
    </tr>
    <tr>
    <td>Blusa</td>
    <td>R$50</td>
    <td>100</td>
    <td>20</td>
    <td>Ativo</td>
    </tr>
    <tr>
    <td>Calça</td>
    <td>R$50</td>
    <td>100</td>
    <td>20</td>
    <td>Ativo</td>
    </tr> -->

    </tbody>
    <tfoot>
    <tr>
    <td colspan="6">
        <?php
        echo "Total em estoque R$" . $soma;        
        ?>

    </td>
    </tr>
    </tfoot>
    </table>
    </main>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>