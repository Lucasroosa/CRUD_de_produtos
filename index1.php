<?php
    include 'conexao.php';
    include 'script/password.php';

    $usuario = $_POST['usuario'];
    $senha_user = $_POST['senha'];


    $sql = "SELECT email_usuario, senha_usuario FROM usuarios WHERE email_usuario = '$usuario' and status='Ativo'";
    $buscar = mysqli_query($conexao,$sql); 

    $total = mysqli_num_rows($buscar);

    while ($array = mysqli_fetch_array($buscar)) { # while
        $senha = $array['senha_usuario'];

        #senha decodificada
        $senhadecodificada = sha1($senha_user);
    

        if($total > 0) {
            # conferir senha
            if ($senhadecodificada == $senha) {

                session_start();
                $_SESSION['usuario'] = $usuario;

                header('Location: menu.php');
            }else {
                header('Location: erro.php');
            }

        }else{
            header('Location: erro.php');
        } 

    } # while

?>