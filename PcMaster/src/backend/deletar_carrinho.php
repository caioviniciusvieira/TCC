<?php
        include_once('conexao.php');
        session_start();

        if(isset($_POST['deletar'])){
            $nome = $_SESSION['nome'];
            $nome_produto = $_POST['nome_produto'];

            $sql_carri = $conexao->prepare("DELETE FROM lista_desejo WHERE nome_completo = ? AND nome_produto = ?");
            $sql_carri->bind_param("ss", $nome, $nome_produto);
            if($sql_carri->execute()){
                include_once('deletar_carrinho.php');
                header('location: ../../puplic/carrinho.php');
        }

        $sql_carri->close();
        $conexao->close();
    }
?>