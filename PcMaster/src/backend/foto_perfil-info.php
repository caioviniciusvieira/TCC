<?php

if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {

    $sql_user = $conexao->prepare("SELECT foto_perfil FROM Usuarios WHERE nome_completo = ?");
    $sql_user->bind_param('s',$_SESSION['nome']);
    $sql_user->execute();
    $result = $sql_user->get_result();
    $foto = $result->fetch_assoc();
    $foto_perfil = $foto['foto_perfil'];
    if($foto_perfil == ''){
        $foto_perfil = '/PcMaster/assets/Imagens/Perfil.png';
    }
    }
    else {
        $foto_perfil = '/PcMaster/assets/Imagens/Perfil.png';
    }

?>