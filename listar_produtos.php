<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Icones Fontawesome-->
    <script src="https://kit.fontawesome.com/208504d0ef.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    
    <div class="container" style="margin-top: 40px">
    <h3>Lista de Produtos</h3>
    <br>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">Nro Produto</th>
        <th scope="col">Nome Produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
        
            
                <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `estoque`";
                    $busca = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($busca)) { //cada linha que a consulta achar ela vai armazenar no array

                        $id_estoque = $array['id_estoque'];
                        $nroproduto = $array['nroproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];

                ?>
            <tr>
                <td><?php echo $nroproduto ?></td>      <!--importante deixa para fecha a tag pho dpois dos "td", assim cada item novo adicionado, vai passar pelo laço-->

                <td><?php echo $nomeproduto ?></td>

                <td><?php echo $categoria ?></td>

                <td><?php echo $quantidade ?></td>

                <td><?php echo $fornecedor ?></td>

                <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-file-pen"></i></i>&nbsp;Editar</a>
                
                <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash"></i></i></i>&nbsp;Excluir</a>
                </td> <!--espaçamento(&nbsp;)-->

            </tr>
        <?php } ?>
           
            
        
    </table>

    <div style="text-align: rigth">
        <a href="index.html" role="button" class="btn btn-sm btn-primary">Voltar</a>
    
    </div>

                        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>