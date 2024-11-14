<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link href="{{ asset('css/cadastro.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/inicialPage.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/materias.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="cabecalho">
            <img class="imgPremium" src="img/conhecimento.png" alt="Conhecimento Premium" />
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
        </div>

        <div>
            <form id="registro_form" onsubmit="return validarFormulario()">
                @csrf

                <div class="form-group">
                    <h1>Cadastre-se</h1>
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" onblur="validacaoEmail(this)" placeholder="Digite seu e-mail" maxlength="60" class="email" required="required">
                    <div id="msgemail"></div>
                </div>

                <div class="form-group password-container">
                    <label for="passwordField">Senha:</label>
                    <div class="input-wrapper">
                        <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" class="senha" required="required">
                        <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
                    </div>
                    <div id="msgsenha"></div>
                    <a href="/login">Já tem conta? Clique aqui</a>
                </div>

                <button type="submit" class="btnCadastro" id="fazerCadastro">Fazer Cadastro</button>
            </form>
        </div>
    </div>

    <a class="usos" href="/TermosdeUso">Termos de Uso</a>
    <div class="container1">
        <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
    </div>

    <script src="{{ asset('js/cadastro.js') }}"></script>
</body>
</html>
