<?php
include 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM `usuarios` WHERE id_fornecedor = $id";
    $deletar = mysqli_query($conexao,$sql);

    header("Location: aprovar_usuario.php"); /* faz a ação e depois voltara para "aprovar o usuario" */

?>


