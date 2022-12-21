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
        <form style="margin-top: 20px">
            <div class="form-group">
                <label>N° do Produto</label>
                <input type="number" class="form-control" placeholder="Numero do Produto">
                
            </div>

            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" placeholder="Nome do Produto">
                
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" placeholder="Nome do Produto">
                
            </div>

            <div class="form-group">
                <label >Categoria</label>
                <select class="form-control">
                    <option>Categoria A</option>
                    <option>Categoria B</option>
                    <option>Categoria C</option>
                    <option>Categoria D</option>
                </select>
            </div>

            <div class="form-group">
                <label >Fornecedor</label>
                <select class="form-control">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                </select>
            

            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
