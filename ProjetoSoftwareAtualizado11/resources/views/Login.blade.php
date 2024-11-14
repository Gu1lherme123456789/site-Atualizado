<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Link para o Font Awesome para usar o ícone de seta -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
</head>
<body>


    <div class="container">
        <div class="cabecalho">

            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>
        <div>
            <form id="registro_form">
                <h1>Faça seu Login</h1>

                <div class="form-group">
                    <label for="email">Insira seu email:</label>
                    <input type="text" id="email" name="email" onblur="validacaoEmail(f1.email)" placeholder="Digite seu email" maxlength="60" class="email" required="required">
                    <div id="msgemail"></div>
                </div>

                <div class="form-group password-container">
                    <label for="passwordField">Insira sua senha:</label>
                    <div class="input-wrapper">
                        <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" class="senha" required="required">
                        <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
                    </div>
                    <a href="/EditarSenha" class="forgot-password">Esqueceu sua senha?</a>
                </div>

                <button type="submit" class="botao">Fazer login</button>
                <br><br>
                <a class="calo" href="/Cadastro">Cadastre-se</a>
            </form>
        </div>

    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
