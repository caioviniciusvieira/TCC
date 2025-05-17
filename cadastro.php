<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];
    $nome = $_POST['nome'];
    $confirmarSenha = $_POST['Confirmpassword'];
    
    

    $inserir = $conexao->prepare("INSERT INTO usuarios (nome, senha, email) VALUES (?,?,?)");
    $inserir->bind_param("sss", $nome, $senha, $email);
    
    if($senha != $confirmarSenha){
        echo "As senhas tem que ser iguais";
    }
    else{
        if ($inserir->execute()){
            echo "Usuario cadastrado com sucesso";
        }
        else {
            echo "error: ". $inserir->error;
        }
    }

    $inserir->close();
    $conexao->close();
    
    ?>
</body>
</html>