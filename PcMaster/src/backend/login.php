   <?php
    session_start();

    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $stmt = $conexao->prepare("SELECT MD5('$senha') AS s, senha FROM Usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();

    $_SESSION['s'] = $email;
    $_SESSION['senha'] = $senha;
        
    if($usuario['s'] == $usuario['senha']){

        $sql_nome = $conexao->prepare("SELECT nome_completo FROM Usuarios WHERE email = ?");
        $sql_nome->bind_param('s',$email);
        $sql_nome->execute();
        $result = $sql_nome->get_result();
        $nome = $result->fetch_assoc();
        
        $_SESSION['nome'] = $nome['nome_completo'];
        $sql_nome->close();
        header('Location: ../../puplic/index.php');
    }     
    else {
        echo "E-mail ou senha incorretos.";
    }


    $stmt->close();
    $conexao->close();

    ?>
