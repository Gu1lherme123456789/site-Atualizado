<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link href="{{ asset('css/cadastro.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="navegacao">
    <a href="/Contato">Entre em Contato</a>
    <a href="/Sobre">Sobre Nós</a>
</div>

<div class="container">
    <div class="cabecalho">
        <div class="title-container">
            <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        </div>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>

    <div id="cabecalhoCadastro">
        <form id="registro_form">
            <h1 class="cabcad">Form de Cadastro</h1>

            <div class="form-group">
                <label class="cabcad" for="email">Insira um email:</label>
                <input type="text" id="email" name="email" onblur="validacaoEmail(f1.email)" placeholder="Digite seu email" maxlength="60" class="email" required="required">
                <div id="msgemail"></div>
            </div>

            <div class="form-group password-container">
                <label class="cabcad" for="passwordField">Insira uma senha:</label>
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

<script src="{{ asset('js/cadastro.js') }}"></script>

</body>
</html>
