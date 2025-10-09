<?php

    include_once('conexao.php');
    session_start();

    $nome = $_SESSION['nome'];
    $id = $_SESSION['id'];
    $imagem = $_SESSION['imagem'];
    $descricao = $_SESSION['decricao'];
    $valor = $_SESSION['valor'];
    $nome_produto = $_SESSION['nome_produto'];

    if($conexao->connect_error){
        echo "Erro na conexão", $conexao->connect_error();
    }

    $verificar = $conexao->prepare("SELECT COUNT(*) FROM lista_desejo WHERE nome_completo = ? AND nome_produto = ?");
    $smt = $verificar->bind_param('ss', $nome, $nome_produto);
    $verificar->execute();
    $verificar->bind_result($count);
    $verificar->fetch();
    $verificar->close();

    if($count > 0){
        echo "ja foi adicionado";
        "ALTER TABLE litas_desejo DROP COLUMN $smt";
        header('Location: ../../puplic/carrinho.php');
    }
    else{
        $sql_carrinho = $conexao->prepare("INSERT INTO lista_desejo (nome_completo, codigo_produto, imagem, nome_produto, descricao, valor) VALUES(?,?,?,?,?,?)");
        $sql_carrinho->bind_param('sissss', $nome, $id, $imagem, $nome_produto, $descricao, $valor);
        $sql_carrinho->execute();
        $sql_carrinho->close();

        header('Location: ../../puplic/carrinho.php');
    }
    $conexao->close();
?>