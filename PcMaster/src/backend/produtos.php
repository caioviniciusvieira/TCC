<?php
    include_once("conexao.php");

    if ($conexao->connect_error) {
        die("Connetion failed:");
        echo $query_clientes->error;
    }

    $sql_produto = "SELECT codigo_produto, imagem, nome, valor, quantidade FROM Produtos";
    $query_produtos = $conexao->query($sql_produto); // consulta o banco de dados
    $num_produtos = $query_produtos->num_rows; // número de colunas na tabela usuarios

    $tipo = 'video';
    $sql_placa = $conexao->prepare("SELECT * FROM Produtos WHERE tipo = ?");
    $sql_placa->bind_param("s", $tipo);
    $sql_placa->execute();
    $query = $sql_placa->get_result();
?>     