<?php

    $servername = "localhost"; //padrão - server local
    $database = "crud_de_produtos"; //alterar conforme o nome do seu banco de dados
    $username = "root"; //padrão - root
    $password = ""; //senha padrão de banco de dados local
    //CREATE CONNECTION
    $conexao = mysqli_connect($servername, $username, $password, $database);