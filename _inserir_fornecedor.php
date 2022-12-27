<?php

    include 'conexao.php';


    
    $fornecedor = $_POST['fornecedor']; //Variavel


    //SQL de inserção

    $sql = "INSERT INTO `fornecedor` (nome_fornecedor) values ('$fornecedor')"; //valor que serao atribuidos a ela
    

    $inserir = mysqli_query($conexao, $sql); //conecta e faz o comando de inserção

?>

<!--Booststrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<div class="container" style= "width: 500px; margin-top: 100px" >
    <center>
        <h4>Fornecedor adicionado com sucesso! </h4>
    </center>

    <center>
    <div style="text-align: rigth; margin-top: 50px"" >
        <a href="index.html" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    </center>
</div>

