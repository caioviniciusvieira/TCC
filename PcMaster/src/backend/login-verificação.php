<?php
    include_once("conexao.php");
    session_start();

    $usuario = 'Crie sua conta';
    $link_conta = 'conta.html';
    $link_cadastro_html = "cadastro.html";
    $link_cadastro_login= '<li><a href="login.html">Entrar</a></li>';
    $logout = "<a class='logout-index' href='../src/backend/logout.php'>Sair</a>";

    if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {

        $email= $_SESSION['s'];
        $usuario = $_SESSION['nome'];
        $link_cadastro_html = '';
        $link_cadastro_login = '';


        $sql_usuario = $conexao->prepare("SELECT * FROM Usuarios WHERE email = ?");
        $sql_usuario->bind_param('s',$email);
        $sql_usuario->execute();
        $result = $sql_usuario->get_result();
        $user = $result->fetch_assoc();
        
    } else {
        $link_conta = $link_cadastro_html;
        $logout ='';
        $email = '';
        echo 'falha na conexão com o usuario';
    }

?>