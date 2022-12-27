<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>cadastro usuario</title>
</head>
<body>
    <div class="container" style =" width: 400px; margin-top: 40px">
        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Cadastro de usuario</h4>

                <form action="_inserir_usuario.php" method="post">
                    <div class="form-group" >
                        <label>Nome do Usuário</label>
                        <input type="text" name="nome_usuario" class="form-control" placeholder="nome completo" autocomplete="off" required >
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email_usuario" class="form-control" placeholder="seu e-mail" autocomplete="off" required >
                    </div>

                    <div class="form-group">
                        <label>Senha do Usuário</label>
                        <input id="txtSenha" type="password" name="senha_usuario" class="form-control" placeholder="sua senha" autocomplete="off" required >
                    </div>

                    <div class="form-group">
                        <label>Confirmar senha</label>
                        <input type="password" name="senha_usuario2" class="form-control" placeholder="repetir senha" autocomplete="off" required oninput="validaSenha(this)" >
                        <small>Precisa ser igual a senha digitada acima.</small>
                    </div>

                    <div class="form-group">
                        <label>Nivel de acesso</label>
                        <select name="nivel_usuario" class="form-control">
                            
                                <option value="1">Admistrador</option>
                                <option value="2">Funcionario</option>
                                <option value="3">Conferente</option>

                        </select>
                    </div>
                

                    <div style="text-align: right">
                        <button  type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                    </div>

                </form>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        function validaSenha (input){ 
            if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente');
        } else {
            input.setCustomValidity('');
        }
        } 
    </script>
</body>
</html>