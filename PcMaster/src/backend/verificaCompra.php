<?php
    include_once('login-verificação.php');

    if(isset($_POST['comprar'])){

        $id = $_GET['id'];

        if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {
                
                header("Location: ../../puplic/confirmado.php?id=".$id."");
        }
            else{
                echo "cadastre um endereço";
                header("Location: ../../puplic/cadastro.php");
            }
        

    }
?>
