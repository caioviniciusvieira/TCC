<?php
    include_once('conexao.php');
    include_once('login-verificação.php');
 
    $destino_final ='/PcMaster/assets/Imagens/Perfil.png';

    $usuario = $_SESSION['nome'];
    if ($usuario == ''){
        echo "cadastre um usuario";
        $destino_final;
    }
    else if (isset($_FILES['foto'])){

        $foto = $_FILES['foto'];
        $foto_nome = $foto['name'];
        $tmp = $foto['tmp_name'];
        $destino = '../../assets/fotosPerfils/';
        $destino_final = $destino.$foto_nome; 
        $foto_perfil = "/PcMaster/assets/fotosPerfils/$foto_nome";  

        $sql_user = $conexao->prepare("UPDATE Usuarios SET foto_perfil = ? WHERE nome_completo = ?");
        $sql_user->bind_param('ss', $foto_perfil, $usuario);

        if(move_uploaded_file($tmp, $destino_final)){ 
        $sql_user->execute();
        include_once('upload_foto_perfil.php');    
        header('Location: ../../puplic/config.php');

        }
        $sql_user->close();
        $conexao->close();
    }


?>