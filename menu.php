<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
<?php

        session_start();

        $usuario = $_SESSION['usuario'];
        /* serve para pegar um usuario logado sem post e sem get, pega o usuario da seção */  /* se não tiver com o isset negado, faze voltar a pagina de login */
        if(!isset($_SESSION['usuario'])) {
            header('Location: index.php');
        }

        include 'conexao.php';

        $sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$usuario' and status='Ativo'";
        $buscar = mysqli_query($conexao, $sql);
        $array = mysqli_fetch_array($buscar);
        echo $nivel = $array['nivel_usuario'];
    ?>

    <div class="container" style="margin-top:100px">

        <div class="row">
            <?php
                if(($nivel == 1) || ($nivel == 2)){

                

            ?>

                    <div class="col-sm-6" style="margin-top:20px">
                        <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar novos itens</a>
                        </div>
                        </div>
                    </div>
    
                <?php } ?>

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
                    <h5 class="card-title">Categoria</h5>
                   <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar nova categoria</a>
                        <div class="row">
                            <a href="listar_categoria.php" class="btn btn-secondary" style="margin-top:20px; margin-left: 15px">Listar categoria</a>
                        </div>
                </div>
                </div>
            </div>
    
            <div class="col-sm-6"  style="margin-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fornecedores</h5>
                   <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>

                   
                        <div class="row">
                            <a href="listar_fornecedor.php" class="btn btn-secondary" style="margin-top:20px; margin-left: 15px">Listar fornecedor</a>
                        </div>
                </div>
                </div>
            </div>

            <div class="col-sm-6"  style="margin-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Usuários</h5>
                   <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar</a>

                </div>
                </div>
            </div>

            <div class="col-sm-6"  style="margin-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aprovar Usuários</h5>
                   <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar</a>

                </div>
                </div>
            </div>
            
            
        </div>
    
    </div>  







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>