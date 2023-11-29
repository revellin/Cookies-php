<?php 

if(isset($_POST['emailN'])){
    
    $EmailN = $_POST["emailN"];
    $senhaN = $_POST["SenhaN"];}
  
  
        setcookie('usuario', $EmailN, time() + 3600, '/');
        setcookie('usuarioSenha', $senhaN, time() + 3600, '/');
        header("Location: perfil.php");
    
 




 

?>