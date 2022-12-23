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

<div class="container" style= "width: 500px; margin-top: 100px" >
    <center>
    <h4> Produto adicionado com sucesso! </h4>
    </center>

    
</div>

<div class="container" style="margin-top:100px">

            <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <!--<h5 class="card-title">Cadastrar novos itens</h5>-->
                <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar novos itens</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <a href="listar_produtos.php" class="btn btn-primary">Visualizar Produtos</a>
            </div>
            </div>
        </div>
        </div>

    </div>