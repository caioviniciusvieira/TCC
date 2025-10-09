<?php
    session_start();
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];
    $nome = $_POST['nome'];
    $confirmarSenha = $_POST['Confirmpassword'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];

    $inserir = $conexao->prepare("INSERT INTO Usuarios (nome_completo, senha, numero, cpf, email) VALUES (?, MD5(?),?,?,?)");
    $inserir->bind_param("sssss", $nome, $senha, $celular, $cpf, $email);
    
    if($senha != $confirmarSenha){
        echo "As senhas tem que ser iguais";
    }
    else{
        if ($inserir->execute()){
            include_once('cadastro-cep.php');
            echo "Usuario cadastrado com sucesso";
            include_once('login.php');
            header('Location: ../../puplic/index.php');
        }
        else {
            echo "error: ". $inserir->error;
        }
    }

    $inserir->close();
    $conexao->close();
    
    ?>
