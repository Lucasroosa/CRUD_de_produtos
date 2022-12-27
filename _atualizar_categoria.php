<?php
 include 'conexao.php';

    $id = $_POST['id'];
    $nome_categoria = $_POST['nome_categoria'];


 $sql = "UPDATE `categoria` SET `nome_categoria`='$nome_categoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container" style="width:400px">
    <center>
        <h3>Categoria atualizada com sucesso!</h3>
        <div style="margin-top: 20px">
            <a href="listar_categoria.php"  role="button" class="btn btn-sm btn-primary" style="margin-top: 50px">Voltar</a>
        </div>
    </center>
</div>