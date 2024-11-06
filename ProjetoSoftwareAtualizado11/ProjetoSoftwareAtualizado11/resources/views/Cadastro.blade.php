<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link href="{{ asset('css/cadastro.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/inicialPage.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="navegacao">
    <a href="/Contato">Entre em Contato</a>
    <a href="/Sobre">Sobre Nós</a>
</div>

<div class="container">
    <div class="cabecalho">
    <img class="imgPremium" src="https://cdn.discordapp.com/attachments/1080645931189416037/1303830520119033966/CONHECIMENTOPREMIUM-removebg-preview.png?ex=672d2e4b&is=672bdccb&hm=25607e56ddc7b80c923d47881a92863235a9c81d5ff91a1c36049b0a29c1a72f&" alt="" />
            <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>

    <div>
        <form id="registro_form">
            <h1>Form de Cadastro</h1>

            <div class="form-group">
                <label for="email">Insira um email:</label>
                <input type="text" id="email" name="email" onblur="validacaoEmail(f1.email)" placeholder="Digite seu email" maxlength="60" class="email" required="required">
            </div>

            <div class="form-group password-container">
                <label for="passwordField">Insira uma senha:</label>
                <div class="input-wrapper">
                    <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" class="senha" required="required">
                    <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
                </div>
            </div>

            <a href="javascript:void(0)" class="btnCadastro" id="fazerCadastro">Fazer Cadastro</a>
        </form>
    </div>
</div>

<a class="usos" href="/TermosdeUso">Termos de Uso</a>
<footer>
        <div class="container">
            <p>&copy; 2024 Conhecimento Premium. Todos os direitos reservados.</p>
           
        </div>
    </footer>

<script src="{{ asset('js/cadastro.js') }}"></script>

</body>
</html>
