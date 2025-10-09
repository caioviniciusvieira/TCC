<?php

    include_once('conexao.php');
    session_start();

    $id = $_SESSION['id'];
    $imagem = $_SESSION['imagem'];
    $valor = $_SESSION['valor'];
    $nome_produto = $_SESSION['nome_produto'];
    $id_usuario = $_POST['id-usuario'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];
    $pagamento = $_POST['pagamento'];
    $quantidade = $_POST['quantidade'];

    $inserir = $conexao->prepare("INSERT INTO comprar (codigo_usuario, nome_completo, codigo_produto, nome_produto,
    imagem, Tipo_de_Pagamento, CPF, CEP, valor, quantidade) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $inserir->bind_param("isissssssi", $id_usuario, $_SESSION['nome'], $id, $nome_produto, $imagem, $pagamento, $cpf, $cep, $valor, $quantidade);

    if($inserir->execute()){
        header("Location: ../../puplic/pedidos.php");
    }

    $inserir->close();
    $conexao->close();
?>