<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
  
  
        setcookie('usuario', $email, time() + 3600, '/');
        setcookie('usuarioSenha', $senha, time() + 3600, '/');
        header("Location: login.php");
    
 
} else {
    header("Location: cadastro.php");
    exit();
}?>