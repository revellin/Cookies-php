
<!DOCTYPE html>
<html lang="pt-br">

<head>
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
        <!-- Caixa de imagem -->
        <div class="img-box">
            <img src="img/logo.jpeg">
        </div>
        <!-- Caixa de conteúdo -->
        <div class="content-box">
            <!-- Caixa de formulário -->
            <div class="form-box">
                <h2>Editar dados</h2>
                <form method="post" action="teste.php">
                    <!-- Campo de entrada de email -->
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" name="emailN" placeholder="@mail.com"<?php echo $_COOKIE['usuario']; ?>>
                    </div>
                    <!-- Campo de entrada de senha -->
                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" name="SenhaN" placeholder="password">
                    </div>
                    <!-- Botão de envio do formulário -->
                    <div class="input-box">
                        <input type="submit"  value="Atualizando" <?php echo $_COOKIE['usuarioSenha']; ?>>
                    </div>
                    <!-- Link para inscrever-se -->
                </form>
                <!-- Fim do formulário -->
            </div>
        </div>
    </div>
</body>

</html>