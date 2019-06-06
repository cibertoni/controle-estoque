<?php 
// include ('teste.php');
require_once ('functions.php');  //garante q o arquivo só foi incluido uma vez//
include_once ('header.php'); //inclui header na pág//
?>    <main class="container">
    <h1>Controle de Estoque</h1>
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
            foreach ($produtos as $indice => $valor){
            $class = ($valor ["estoque"] < $valor ["min"]) ? "vermelho" : ""; //if ternário da operação acima//

            echo "<tr class='$class'>";
            echo "<td>". $valor["nome"] ."</td>";
            echo "<td> R$". $valor["preco"] ."</td>"; //ja vai concatenar com valor R$//
            echo "<td>". $valor["estoque"] ."</td>";
            echo "<td>". $valor["min"] ."</td>";
            echo "<td>". ($valor["status"] ? "Ativo" : "Desativado") ."</td>"; //se o status for verdade / pergunte, imprima ativo : ao contrario desativado//
            echo "<td> R$". number_format(totalProduto($valor['preco'], $valor['estoque']), 2, ',', '.') ."</td>"; //number_format função do php q formata o numero - espaços é para formatação dos numeros do total (virgula centavos dps o ponto de mil)//
            echo "</tr>";
        } ?>

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
    <td colspan="3">
    Total em estoque
    </td>
    
    <td colspan="3" class="text-right">
    <?php echo "R$ " . totalEstoque(); ?>
    </td>
    </tr>
    </tfoot>
    </table>
    </main>

<?php 
include_once ("footer.php");
?>