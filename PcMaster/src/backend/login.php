<?php
    session_start();

    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $stmt = $conexao->prepare("SELECT MD5('$senha') AS s, senha FROM Usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();

    $_SESSION['s'] = $email;
    $_SESSION['senha'] = $senha;
        
    if($usuario['s'] == $usuario['senha']){
        echo "Login bem-sucedido! Bem-vindo, $email.";
        header('Location: /Pcmaster/assest/Imagens/Loja.php');
    }     
    else {
        echo "E-mail ou senha incorretos.";
    }


    $stmt->close();
    $conexao->close();

?>