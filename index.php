<?php
require_once('functions.php'); // garante que o arquivo só foi incluido uma vez
include_once('header.php'); // inclui header na pagina
?>

<main class="container">
  <h1>Controle de Estoque</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Qtd Minima</th>
        <th>Status</th>
        <th>Total</th>
        <th>Ação</th> <!--head da table e adicionou uma celula na ultima linha para q a tabela -->
              </tr>
    </thead>
    <tbody>

      <?php

    $produtos = carregaProdutos();

    if (count($produtos) > 0){ // teste se tem produto cadastrado, faz o foreach
      
      foreach ($produtos as $indice => $valor) {
        $class = ($valor["estoque"] < $valor["min"]) ? "vermelho" : "";
        echo "<tr class='$class'>";
        echo "<td>" . $valor["nome"] . "</td>";
        echo "<td> R$" . $valor["preco"] . "</td>";
        echo "<td>" . $valor["estoque"] . "</td>";
        echo "<td>" . $valor["min"] . "</td>";
        echo "<td>" . ($valor["status"] ? "Ativo" : "Desativado") . "</td>";
        echo "<td> R$" . number_format(totalProduto($valor['preco'], $valor['estoque']), 2, ',', '.') . "</td>";
        echo "<td><a href='cadastro-produto.php?pos=".$indice."'>Alterar</a></td>"; //incluir link de alterar - concatenar indice para contar a posição que esta no pos (pos=0,1,2)
        echo "</tr>";
      }
    }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
        Total em estoque
      </td>
      <td colspan="3" class="text-right">
          <?php echo "R$ " . number_format(totalEstoque()); ?>

        </td>
      </tr>
    </tfoot>
  </table>
</main>


<?php
  include_once("footer.php");
?>