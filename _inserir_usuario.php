<?php
 include 'conexao.php';
 include 'script/password.php';

    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $nivel_usuario = $_POST['nivel_usuario'];
    $status = 'Ativo'; /* cada form cadastrado por padrao fica com status ativo */

    echo $sql = "INSERT INTO `usuarios` (nome_usuario, email_usuario, senha_usuario, nivel_usuario, status ) 
                 values ('$nome_usuario', '$email_usuario', sha1('$senha_usuario'), $nivel_usuario, '$status')";
    $inserir = mysqli_query($conexao, $sql);

?>


<!--Booststrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<div class="container" style= "width: 500px; margin-top: 100px" >
    <center>
        <h4>usuario adicionado com sucesso! </h4>
    </center>

    <center>
    <div style="text-align: rigth; margin-top: 50px"" >
        <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    </center>
</div>





















<!-- CREATE TABLE usuarios (
    id_usuario int AUTO_INCREMENT,
    nome_usuario varchar(200) not null,
    email_usuario varchar(250) not null,
    senha_usuario varchar(15) not null,
    nivel_usuario int(2) not null,
    PRIMARY KEY(id_usuario)) -->