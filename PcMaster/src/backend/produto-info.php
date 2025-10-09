<?php

    $id = $_GET['id'];

    $stmt = $conexao->prepare("SELECT * FROM Produtos WHERE codigo_produto = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $query_produto = $stmt->get_result();

    $num_produtos = $query_produtos->num_rows;
    $produto = $query_produto->fetch_assoc();

    if($num_produtos == 0|| $id == ''){
        echo "Produto não encontrado";
    }

    $_SESSION['id'] = $id;
    $_SESSION['imagem']  =  $produto['imagem'];
    $_SESSION['decricao']  =  $produto['descricao'];
    $_SESSION['valor']  =  $produto['valor'];
    $_SESSION['nome_produto']  =  $produto['nome'];    

?>