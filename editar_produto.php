<?php
include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!---<link rel="stylesheet" href="style.css">-->
    
        <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }
        #botao {
            background-color: #00AEBC;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
   
    
</head>
<body>
    
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4>CRUD de Cadastro</h4>
        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">  <!--ACTION responsalvel por levar as informações para o outro script com conexão-->
            <?php
                $sql =  "SELECT * FROM `estoque` WHERE id_estoque = $id";  //vai pegar tudo do estoque quando o id_estoque for igual a id(GET)
                $buscar = mysqli_query($conexao,$sql);
                while ($array = mysqli_fetch_array($buscar)) {

                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];

            ?>
            <div class="form-group">
                <label>N° do Produto</label> 
                <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                
            </div>

            <div class="form-group">
                <label >Categoria</label>
                <select class="form-control" name="categoria">

                    <?php
                        include 'conexao.php';

                        $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                        $buscar = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($buscar)) { // ABRE o while-->

                            $id_categoria = $array['id_categoria'];
                            $nome_categoria = $array['nome_categoria'];

                    ?> 


                        <option><?php echo $nome_categoria ?></option>


                    <?php  } ?> <!--FECHA while-->

                </select>
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                
            </div>

            <div class="form-group">
                <label >Fornecedores</label>
                <select class="form-control" name="fornecedor">

                    <?php
                        include 'conexao.php';

                        $sql2 = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
                        $buscar2 = mysqli_query($conexao,$sql2);

                        while ($array2 = mysqli_fetch_array($buscar2)) { // ABRE o while-->

                            $id_fornecedor = $array2['id_fornecedor'];
                            $nome_fornecedor = $array2['nome_fornecedor'];

                    ?> 


                        <option><?php echo $nome_fornecedor ?></option>


                    <?php  } ?> <!--FECHA while-->

                </select>
            </div>

            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
            </div>

            <?php } ?>        <!--fechando o while-->
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>