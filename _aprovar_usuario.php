<?php
    include 'conexao.php';


    $id  = $_GET['id'];
    $nivel_usuario  = $_GET['nivel_usuario'];


    if ($nivel_usuario == 1) {

        $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id"; //nivel 1 adm
        $atualizar = mysqli_query($conexao,$update);
        echo "ADMINISTRADOR APROVADO!";
    }

    if ($nivel_usuario == 2) {

        $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id"; //nivel 2 funcionario
        $atualizar = mysqli_query($conexao,$update);
        echo "FUNCIONARIO APROVADO!";
    }

    if ($nivel_usuario == 3) {

        $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id"; //nivel 3 conferente
        $atualizar = mysqli_query($conexao,$update);
        echo "CONFERENTE APROVADO!";
    }


    header("Location: aprovar_usuario.php");

?>