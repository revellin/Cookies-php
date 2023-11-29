<?php


setcookie("usuario", "", time() - 3600, "/");
setcookie("usuarioSenha", "", time() - 3600, "/");
header("Location: perfil.php");
?>