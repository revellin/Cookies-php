
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
                <form method="post" action="Cadastra.php">
                    <!-- Início do formulário -->
                    <!-- Fim da caixa de entrada de texto -->
                    <div class="input-box">
                        <span>Email</span>
                       
                        <input type="email" name="email" placeholder="@mail.com">
                        <!-- Cria um campo de email com um placeholder -->
                        <div class="input-box">
                            <span>Senha</span>
                            <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                            <!-- Cria um campo de senha com um placeholder -->
                        </div>
                        <div class="input-box">
                            <input type="submit" value="Cadastrar">
                            <!-- Cria um botão de envio do formulário -->
                        </div>
                </form>
                <!-- Fim do formulário -->
            </div>
        </div>
    </div>
</body>

</html>