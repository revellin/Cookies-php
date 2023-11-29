
<?php 
    if(!isset($_COOKIE['usuario'])){
       $exibir = "Vazio";
       $exibir2 = "Vazio";
    }else{
        $exibir = $_COOKIE['usuario'];
        $exibir2 = $_COOKIE['usuarioSenha'];
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Importa o arquivo CSS do Bootstrap para estilização -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
    <link rel="stylesheet" href="style.css">
    <!-- Importa um arquivo de estilo personalizado (style.css) -->
    <title>Cadastro</title>
    <!-- Define o título da página como "Cadastro" -->
</head>

<body>
    <div class="container-login">
        <!-- Container principal -->
        <div class="img-box">
            <!-- Cria uma caixa para a imagem -->
            <img src="img/logo.jpeg">
            <!-- Insere uma imagem no elemento img -->
        </div>
        <div class="content-box">
            <!-- caixa de conteúdo -->
            <div class="form-box">
                <!-- caixa de formulário -->
                <h2>Cadastro</h2>
                <!-- Insere um título "Cadastro" -->
                    <!-- Início do formulário -->
                    <!-- Fim da caixa de entrada de texto -->
                    <div class="input-box">
                        <span>Email</span>
                        <p><?= $exibir ?></p>
                        <!-- Cria um campo de email com um placeholder -->
                        <div class="input-box">
                            <span>Senha</span>
                            <p id="perfil__texto__email"><?= $exibir2 ?></p>
                            <!-- Cria um campo de senha com um placeholder -->
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-box">
                                    <form method="post" action="editar.php">
                                        <input type="submit" value="Editar">
                                        <!-- Cria um botão de envio do formulário -->
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-box">
                                <form method="post" action="login.php">
                                <input type="submit" value="Sair">
                            </form>
                            
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <form method="post" action="excluir.php">
                                <input type="submit" value="Excluir">
                            </form>
                            <!-- Cria um botão de envio do formulário -->
                        </div>
             
                <!-- Fim do formulário -->
            </div>
        </div>
    </div>
</body>

</html>