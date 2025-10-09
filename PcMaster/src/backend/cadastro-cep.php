<?php
    include_once("conexao.php");

    if($conexao->connect_error){
        echo "Erro na conecão", $conexao->connect_error();
    }

        $nome = $_POST['nome'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
    
        $sql_endereco = ("UPDATE enderecos SET CEP = ?, estado = ?, cidade = ?, bairro = ?, rua = ?, numero = ? WHERE nome_completo = ?");
        $inserir = $conexao->prepare($sql_endereco);
        $inserir->bind_param("sssssss", $cep, $estado, $cidade, $bairro, $rua, $numero, $nome);
        $inserir->execute();

        $inserir->close();
?>
