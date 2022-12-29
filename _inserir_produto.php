<?php

    include 'conexao.php';


    $nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $quantidade = $_POST['quantidade'];
    $categoria = $_POST['categoria'];
    $fornecedor = $_POST['fornecedor'];


    //SQL de inserção

    $sql = "INSERT INTO `estoque`(nroproduto, `nomeproduto`, `categoria`, quantidade, `fornecedor`) 
            VALUES ($nroproduto,'$nomeproduto','$categoria', $quantidade ,'$fornecedor')";

    $inserir = mysqli_query($conexao, $sql); //conecta e faz o comando de inserção

?>

<!--Booststrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- <div class="container" style= "width: 500px; margin-top: 100px" >
    <center>
    <h4> Produto adicionado com sucesso! </h4>
    </center>

    
</div>


<?php
//Pagina Principal
	/* 
	echo "<a href=\"_inserir_produto.php\">Link1</a>";
	echo "<a href=\"_inserir_produto.php?a=adicionar_produto.php\">Link2</a>";
	

	@$pagina = $_GET['a'];
	
	if(isset($pagina)) {
		include $pagina;
	}else $pagina;
	echo "Bem vindo a pagina principal";
 */


?>




<div class="container" style="margin-top:100px">

    <div class="row">
        <div class="col-sm-6" style="margin-top:20px">
            <div class="card">
            <div class="card-body">
               <h5 class="card-title">Cadastrar novos itens</h5>
               <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar novos itens</a>
            </div>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top:20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Visualizar Produtos</h5>
                <a href="listar_produtos.php" class="btn btn-primary">Visualizar Produtos</a>
            </div>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top:20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cadastrar nova categoria</h5>
               <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar nova categoria</a>
            </div>
            </div>
        </div>

        <div class="col-sm-6"  style="margin-top:20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Fornecedores</h5>
               <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
            </div>
            </div>
        </div>
        
        
    </div>

</div>   -->

<div class="container" style= "width: 500px; margin-top: 100px" >
    <center>
        <h4>Produto adicionado com sucesso! </h4>
    </center>

    <center>
    <div style="text-align: rigth; margin-top: 50px"" >
        <a href="index.html" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    </center>
</div>
