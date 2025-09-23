<?php

$host = "localhost";    // para ver os arquivos salvos no htdocs
$user = "root";         // usuário padrão do mysql
$pass = "";             // senha do banco de dados
$banco = "TCC";       // nome do banco de dados

$conexao = @mysqli_connect($host, $user, $pass, $banco);

if($conexao->connect_error){
    die('Connection failed:'. $conexao->connect_error());
}

?>