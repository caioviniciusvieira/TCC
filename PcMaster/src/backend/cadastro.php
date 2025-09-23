 <?php
    session_start();
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];
    $nome = $_POST['nome'];
    $confirmarSenha = $_POST['Confirmpassword'];
    
    $_SESSION['nome'] = $nome;

    $inserir = $conexao->prepare("INSERT INTO Usuarios (nome_completo, senha, email) VALUES (?, MD5(?),?)");
    $inserir->bind_param("sss", $nome, $senha, $email);
    
    if($senha != $confirmarSenha){
        echo "As senhas tem que ser iguais";
    }
    else{
        if ($inserir->execute()){
            echo "Usuario cadastrado com sucesso";
            header('Location: /Pcmaster/assest/Imagens/Loja.php');
        }
        else {
            echo "error: ". $inserir->error;
        }
    }

    $inserir->close();
    $conexao->close();
    
    ?>