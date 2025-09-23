<?php
    include_once("conexao.php");
    session_start();

    $usuario = 'Crie sua conta';
    $link_conta = 'conta.html';
    $link_cadastro = 'cadastro.html';
    $link_cadastroHtml= '<li><a href="login.html">Entrar</a></li>';
    $logout = "<form method='post' action='logout.php'><button>Sair</button></form>";

    if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {
        $usuario = $_SESSION['nome'];
        $link_cadastroHtml = '';
    } else {
        $link_conta = $link_cadastro;
        $logout ='';
        echo 'falha na conexão com o banco';
    }

?>