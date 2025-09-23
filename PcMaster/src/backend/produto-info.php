<?php

    $id = $_GET['id'];

    $stmt = $conexao->prepare("SELECT * FROM Produtos WHERE codigo_produto = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $query_produtos = $stmt->get_result();

    $num_produtos = $query_produtos->num_rows;
    $produtos = $query_produtos->fetch_assoc();

    if($num_produtos == 0|| $id == ''){
        echo "Produto não encontrado";
    }

    $_SESSION['id'] = $id;
    $_SESSION['imagem']  =  $produtos['imagem'];
    $_SESSION['decricao']  =  $produtos['descricao'];
    $_SESSION['valor']  =  $produtos['valor'];
    $_SESSION['nome_produto']  =  $produtos['nome'];    

?>