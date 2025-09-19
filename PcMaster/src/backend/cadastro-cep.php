<?php
    include_once("conexao.php");
    session_start();

    if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {

        $usuario = $_SESSION['nome'];
        $cep = $_POST['CEP'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
    
        $sql_user = ("UPDATE Usuarios SET CEP = ?, estado = ?, cidade = ?, bairro = ?, rua = ? WHERE nome_completo = ?");
        $inserir = $conexao->prepare($sql_user);
        $inserir->bind_param("ssssss", $cep, $estado, $cidade, $bairro, $rua, $usuario);
        $inserir->execute();

        $inserir->close();
        $conexao->close();
    }
    else{
        echo 'Usuario não cadastrado, cadastre um usuario para adicionar um endereço';
    }

    if($conexao->connect_error){
        echo "Erro na conecão", $conexao->connect_error();
    }
?>
