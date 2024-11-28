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
            <button class="toggle-btn" onclick="toggleMode()">Alterar fundo</button>
        </div>
    <div>
            <form id="registro_form" method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Faça seu Login</h1>

                <div class="form-group">
                    <label for="email">Insira seu email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group password-container">
                    <label for="password">Insira sua senha:</label>
                    <input type="password" id="password" name="password" required>
                    <a href="/EditarSenha" class="forgot-password" style="color: purple" >Esqueceu sua senha? clique aqui!</a>
                </div>

                <button type="submit" class="btnCadastro">Login</button>
                <br><br>
                <a class="calo" href="/Cadastro" class="btnCadastro">Cadastre-se</a>
            </form>
        </div>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
