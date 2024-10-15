<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="navegacao">
    <a href="/Comentarios"> Comente algo </a>
    <a href="/Materias"> Matérias </a>
    <a href="/Favoritas "> Matérias Favoritas </a>
    <a href="/Duvidas"> Informe sua dúvida para nós </a>
    <a href="/Avaliacao"> Avalie-nos </a>
    <a href="/Contato"> Entre em Contato </a>
    <a href="/Calendario"> VIP: Agende sua aula ao vivo </a>
    <a href="/Sobre"> Sobre Nós </a>
    <a href="/Professores"> Professores </a>
</div>

<div class="container">
    <div class="cabecalho">
        <div class="title-container">
            <h1 id="cabecalho">CONHECIMENTOPREMIUM</h1>
        </div>
        <button class="toggle-btn" onclick="toggleMode()" id="btn">Alterar fundo</button>
    </div>

    <div id="cabecalhoLogin">
        <form id="registro_form">
            <h1 class="forl">Form de Login</h1>

            <div class="form-group">
                <label class="forl" for="email">Insira seu email:</label>
                <input type="text" id="email" name="email" onblur="validacaoEmail(f1.email)" placeholder="Digite seu email" maxlength="60" class="email" required="required">
                <div id="msgemail"></div>
            </div>

            <div class="form-group password-container">
                <label class="forl" for="passwordField">Insira sua senha:</label>
                <div class="input-wrapper">
                    <input type="password" id="passwordField" placeholder="Digite sua senha" maxlength="60" class="senha" required="required">
                    <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
                </div>
                <a href="/EditarSenha" class="forgot-password">Esqueceu sua senha?</a>
            </div>

            <button type="submit"  class="botao">Fazer login</button>
            <br><br>
            <a class="calo" href="/Cadastro">Cadastre-se</a>
        </form>
    </div>
</div>

<a class="usos" href="/TermosdeUso">Termos de Uso</a>

<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>
