<?php
include 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
    $deletar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<div class="container" style="width:400px; margin-top: 20px">
    <center>
        <h3>Deletador com sucesso!</h3>
        <div style="margin-top: 20px">
            <a href="listar_categoria.php"  role="button" class="btn btn-sm btn-primary" style="margin-top: 50px">Voltar</a>
        </div>
    </center>
</div>


