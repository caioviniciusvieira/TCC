<?php
    include_once("conexao.php");

    if ($conexao->connect_error) {
        die("Connetion failed:");
        echo $query_clientes->error;
    }

    $sql_produto = "SELECT codigo_produto, imagem, nome, valor, quantidade, descricao FROM Produtos";
    $query_produtos = $conexao->query($sql_produto); // consulta o banco de dados
    $num_produtos = $query_produtos->num_rows; // número de colunas na tabela usuarios

    $tipo = ['Placa de Vídeo','Processador','Teclado','Cadeira','Monitor','Water Cooler','Memória','Placa-mãe','Gabinete','Fonte','Fans','Aramazanamento'];
    for($i = 0; $i <= 12; $i++){
        $sql_[$i] = $conexao->prepare("SELECT * FROM Produtos WHERE tipo = ?");
        $sql_[$i]->bind_param("s", $tipo[$i]);
        $sql_[$i]->execute();
        $query_[$i] = $sql_[$i]->get_result();
        $num_[$i] = $query_[$i]->num_rows;
    }

?>     