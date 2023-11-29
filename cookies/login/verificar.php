<?php 
    if(isset($_POST['emaill'])){
        $teste = $_POST["emaill"];
        $teste2 = $_POST["senhal"]; 
    
    }

    $emailCook = $_COOKIE['usuario'];
    $SenhaCook = $_COOKIE['usuarioSenha'];
    
    if(($teste == $emailCook) && ($teste2 == $SenhaCook)){
        header("Location:perfil.php");
    }else{
       
        header("Location:login.php");
    }
?>