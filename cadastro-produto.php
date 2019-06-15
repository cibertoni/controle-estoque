<?php
require_once('functions.php'); // garante que o arquivo só foi incluido uma vez
include_once('header.php'); // inclui header na pagina

// $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
// $preco = isset($_POST['preco']) ? $_POST['preco'] : '';
// $qntestoque = isset($_POST['quantidadedeestoque']);
// $qntminima = isset($_POST['quantidademinima']);

if(isset($_GET['pos'])){
  $pos = $_GET['pos'];
    $produtos = carregaProdutos(); //carregaProdutos traz todos os produtos da lista json
   if($pos >= count($produtos)){
     echo ("Produto inexistente");
     exit(1); //para redirecionar o seu erro para uma tela só pra isso ex: pos 10 = produto inexistente
   }
    $produto = $produtos[$pos];
  }else{
    $pos = null;//vai adicionar um elemento se não encontrar a posição
    
    $produto= [
      "nome" => '',
      "preco" => 0,
      "estoque" => 0,
      "min" => 0,
      "status" => false
    ];
  }

  // if(isset($_POST && is_null($_POST['pos'])){ //inserir novo produto - testando se veio um novo formulario no GET -> posição é nula, inserir novo produto
  // $produtos[] = $_POST;

  // }elseif(isset($_POST) && !is_null($_POST['pos'])){ //alterar o produto da posição $pos - se eu tenho a posição, ele 
  // $produtos[$pos] = $_POST;
  // }

// if(isset($_POST['nome'])) {
//     echo "Cadastrado com sucesso";
// }

// if(isset($_POST['preco'])) {
//     echo "Cadastrado com sucesso";
// }

?>


<main class="container">

<form class="form-group">
<h1>Cadastro de Produto</h1>

<div class="form-group">
<label for="">Nome</label>
<input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $produto['nome'] ?>"> <!--value = nome do produto da posição desejada-->
</div>

<div class="form-group">
<label for="">Preço</label>
<input type="text" class="form-control" placeholder="Preço" name="nome" value="<?php echo $produto['preco'] ?>">
</div>

<div class="form-group">
<label for="">Quantidade em estoque</label>
<input type="text" class="form-control" name="quantidadedeestoque" value="<?php echo $produto['estoque'] ?>">
</div>

<div class="form-group">
<label for="">Quantidade mínima</label>
<input type="text" name="quantidademinima" class="form-control" value="<?php echo $produto['min'] ?>">
</div>

<div class="form-group">
<label for="status">Status</label>
<input type="checkbox" name="status" value="1" <?php echo ($produto['status'] == 'true'?'checked':'');?>> <!--manda se tiver marcado como check, se não, não vai-->
</div>

<input type="hidden" name="pos" value="<?php $pos ?>">

<br>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="Cadastro-produto">Salvar</button>
</div>


</form>
<?php
  include_once("footer.php");
?>
</html>